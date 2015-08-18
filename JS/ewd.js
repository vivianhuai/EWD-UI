window.onload = function(){

	ewd = {
		'namespace':'ewd',
		'liveEvents': {},
		regPrepare: function(stringRegex) {

			var returnRegex = '/',

				// First get element tag name
				tagName = stringRegex.match(/^.+?(?=\#|\.)/g),

				// #id
				regID = stringRegex.match(/#.*$/g);

			// ["li"]

			if( tagName !== null && tagName !== undefined ) {

				if( typeof tagName[0] === 'string' ) {

				// if [li][0] --returns not # or . it's a tag name

					if( tagName[0][0] !== '#' && tagName[0][0] !== '.' ) {

						returnRegex += '^(?=^'+tagName[0]+')';

					}

				}

			}

			if( regID !== null && regID !== undefined ) {

				// regID[0] = '#id.class1.class2 ...'

				var prepareID = regID[0][0];

				if( regID[0][0] === '#' ) {

					returnRegex += '(?=.*?\b\.idhere\b)';

				}


			}

			returnRegex += '.*$/g';

			return returnRegex;

		},
		genRegex: function(selectorString) {
			
			var stringRegex = [], regexOutput, i = 0, prepare;

			if(selectorString.indexOf(',') !== -1) {

				prepare = selectorString.split(',');

				// prepare = ["div.ewd.toggle a" , "li.second.selector a"]

				for( i; i < prepare.length; i++ ) {

					// prepare[i] = ["   div.ewd.toggle    a   "] --remove unnecessary white spaces

					var push = prepare[i].replace(/^\s+|\s+$/g,'').replace(/\s\s+/g, ' ');

					// returned :: push = ["div.ewd.toggle a"]

					// push = ["div.ewd.toggle" , "a"]

					stringRegex.push( push.split(' ') );

				}

				// stringRegex = [ ["div.ewd.toggle" , "a"] , ["li.second.selector" , "a"] ]
			
			} else {

				// prepare = ["  div.ewd.toggle   a   "] --remove unnecessary white spaces

				stringRegex = selectorString.replace(/^\s+|\s+$/g,'').replace(/\s\s+/g, ' ');

				// prepare = ["div.ewd.toggle a"]

				if( stringRegex.indexOf(' ') !== -1  ) {

					// stringRegex = ["div.ewd.toggle", "a"]

					stringRegex = stringRegex.split(' ');

				}

			}

			// if [ "is string!" ] --single selector { else it is an array object and is a Muti selector [ [], [] ] }

			if( typeof stringRegex[0] === 'string') {

				regexOutput = ewd.regPrepare(stringRegex);

			} else {

				console.log('multi');

			}


			console.log(regexOutput);

		},
		setEvent: function(selectorAdd, addFunc) {

			if( typeof selectorAdd === 'string' && selectorAdd.length > 0 && typeof addFunc === 'function' ) {

				var add = ewd.genRegex(selectorAdd);

				ewd.liveEvents[add] = addFunc;

			}
			
		},
		removeEvent: function(selectorRemove) {

			var remove = ewd.genRegex(selectorRemove);

			delete ewd.liveEvents[remove];

		}
	};


	document.body.addEventListener('click',function(el){

		var startSpeedTest = new Date().getMilliseconds(), test = '';

		var ittArr = el.path.reverse().splice(2), i = 0, output = '', selectorArr = [], eventStored = Object.keys( ewd.liveEvents );

		// Generate string for selector

		for( i; i < ittArr.length; i++ ) {

			output += ittArr[i].localName.trim();

			if(ittArr[i].id.length > 0) {

				output += '#' + ittArr[i].id.replace(/ /g, '');

			}

			if(ittArr[i].className.length > 0) {

				output += '.' + ittArr[i].className.replace(/^\s*/,'').replace(/ /g, '.');

			}

			selectorArr.push(output);

			output = '';

		}

		// Start Selector engine

		i = 0;

		for( i; i < eventStored.length; i++ ) {

			// True = Multiple CSS selectors (else{ just one CSS selector })
			
			if( eventStored[i].indexOf(',') !== -1 ) {

				test = eventStored[i].toString().split(',');

			} else {



			}
			
		}

		var speedTestResult = new Date().getMilliseconds() - startSpeedTest;

		console.log( selectorArr, speedTestResult, test );

		/*var classList = el.srcElement.className;

		if( classList.indexOf('ewd') !== -1 && classList.indexOf('toggle') !== -1 ) {
			// Go down the parent list
			console.log('execute');
		} else if( el.srcElement.localName === "i" || "a" ) {
			classList.indexOf('ewd');
			classList.indexOf('toggle');
			// Go up the parent list
			console.log(el.path);
		}*/

	});

}

