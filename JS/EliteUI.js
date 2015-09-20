window.onload = function(){

	ewd = {
		'namespace':'ewd',
		'liveEvents': {},
		regPrepare: function(stringReg) {

			// Regex formula:: / ^(?=^li)(?=.*?\b#MainOBJ\b)(?=.*?\bthree\b)(?=.*?\btwo\b).*$ /g

			// Regex Test:: ^(?=^li)(?=.*?\b#MainOBJ\b)(?=.*?\bthree\b)(?=.*?\btwo\b).*$

			var stringRegex = [],
				intC = 0,
				returnRegex = '';

			// String Regex could be a string or array

			if( typeof stringReg === 'string' ) {

				stringRegex.push(stringReg);

			} else {

				stringRegex = stringReg;

			}

			for( intC; intC < stringRegex.length; intC++ ) {

					// First get element tag name
				var tagName = stringRegex[intC].match(/^.+?(?=\#|\.)/g),
					// #id
					regID = stringRegex[intC].match(/#.*$/g),
					// Class array
					classArray = [];

				if( tagName !== null && tagName !== undefined ) {

					if( typeof tagName[0] === 'string' ) {

					// if [li][0] --returns not # or . it's a tag name

						if( tagName[0][0] !== '#' && tagName[0][0] !== '.' ) {

							returnRegex += '^(?=^'+tagName[0]+')';

						}

					}

				} else if( stringRegex[intC].length > 0 ) {

					// element tag name provided but no id or classes associated

					if( stringRegex[intC][0] !== '#' && stringRegex[intC][0] !== '.' ) {

							returnRegex += '^(?=^'+stringRegex[intC]+')';

					}
				}

				if( regID !== null && regID !== undefined ) {

					// regID[0] = '#id.class1.class2 ...'

					var prepareID = regID[0],
						// split = '#id.class1.class2 ...'
						split = prepareID.substring(0, prepareID.indexOf('.'));

					returnRegex += '(?=.*?\\b'+split+'\\b)';

				}

				if( stringRegex[intC].match(/\./g) !== null && stringRegex[intC].match(/\./g) !== undefined  ) {

					var perpareClasses = stringRegex[intC].substring(stringRegex[intC].indexOf('.'));
						classArray = perpareClasses.split('.').splice(1),
						i = 0;

					for( i; i < classArray.length; i++ ) {

						returnRegex += '(?=.*?\\b'+classArray[i]+'\\b)';

					}

				}

				if( intC + 1 !== stringRegex.length ){
					returnRegex += ' ';
				}
				

			}

			return returnRegex;

		},
		genRegex: function(selectorString) {
			
			var stringRegex = [], regexOutput, i = 0, prepare;

			// prepare = ["  div.ewd.toggle   a   "] --remove unnecessary white spaces

			stringRegex = selectorString.replace(/^\s+|\s+$/g,'').replace(/\s\s+/g, ' ');

			// prepare = ["div.ewd.toggle a"]

			if( stringRegex.indexOf(' ') !== -1  ) {

				// stringRegex = ["div.ewd.toggle", "a"]

				stringRegex = stringRegex.split(' ');

			}
			
			regexOutput = ewd.regPrepare(stringRegex);

			return regexOutput;

		},
		setEvent: function(selectorAdd, addFunc) {

			if( selectorAdd.indexOf(',') === -1 && typeof selectorAdd === 'string' && selectorAdd.length > 0 && typeof addFunc === 'function' ) {

				ewd.liveEvents[ewd.genRegex(selectorAdd)] = addFunc;

			} else {

				var multiSelector = selectorAdd.split(','), 
					i = 0;

				for( i; i < multiSelector.length; i++ ){

					ewd.liveEvents[ewd.genRegex(multiSelector[i])] = addFunc;

				}

			}
			
		},
		removeEvent: function(selectorRemove) {

			var remove = ewd.genRegex(selectorRemove);

			delete ewd.liveEvents[remove];

		},
		hasClass: function(el,cl){
			if( el.className.indexOf(cl) > -1 ) {
				return true;
			} else {
				return false;
			}
		},
		removeClass: function(el,cl){
			var reg = new RegExp('\\s*?(\\b'+cl+'\\b)','g');
			el.className = el.className.replace(reg,'');
		}
	};

	// Live click event

	document.body.addEventListener('click',function(el){

		//var startSpeedTest = new Date().getMilliseconds(), test = '';

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

		var i = 0;

		for( i; i < eventStored.length; i++ ) {

			var eachElementRegex = eventStored[i].split(' '),
				eachInt = 0,
				checkCount = 0;

			for( eachInt; eachInt < eachElementRegex.length; eachInt++ ) {

				var regexCheck  = new RegExp(eachElementRegex[eachInt]),
					selectorInt = 0;

				for( selectorInt; selectorInt < selectorArr.length; selectorInt++ ) {

					var checker = regexCheck.test( selectorArr[selectorInt] , 'g' );

					//console.log(regexCheck, selectorArr[selectorInt], checker);

					if( checker === true ) {
						checkCount++;
						//console.log(selectorArr[selectorInt], checkCount, eachElementRegex.length );
					}

					if( checkCount === eachElementRegex.length ) {
						ewd.liveEvents[ eventStored[i] ]( el , ittArr[selectorInt] );
						//console.log( selectorArr[selectorInt], regexCheck, checkCount );
						break;
					}

				}

			}
			
		}

		//var speedTestResult = new Date().getMilliseconds() - startSpeedTest;
		//console.log( speedTestResult );

	});

	ewd.setEvent( 'a.ewd.button.toggle , div.ewd.buttons.toggle a' , function(e, el){

		e.preventDefault();

		if( ewd.hasClass(el,'toggle') ){

			if( ewd.hasClass(el,'active') === false ){

				el.className += ' active';

			} else {

				ewd.removeClass(el,'active');

			}

		} else {

			// If the element doesn't have the toggle class itself then we know it is either a group or group of grouped buttons.

			if( ewd.hasClass( el.parentElement, 'ewd' ) && ewd.hasClass( el.parentElement, 'toggle' ) ) {

				// Group of buttons

				var children = el.parentElement.children, i = 0;

				for( i; i < children.length; i++ ){
					ewd.removeClass(children[i],'active');
				}

				el.className += ' active';

			} else {

				// Group of grouped buttons

				var children = el.parentElement.parentElement.children, i = 0;

				for( i = 0; i < children.length; i++ ){

					var subgroups = children[i].children, inter = 0;

					for( inter = 0; inter < subgroups.length; inter++ ) {
						
						ewd.removeClass(subgroups[inter],'active');

					}

				}

				el.className += ' active';

			}

		}

	});

	document.body.addEventListener('input',function(el){

		var caretPos   = el.srcElement.selectionStart,
			value 	   = el.srcElement.value,
			textOnly   = el.srcElement.getAttribute('data-text'),
			pureText   = el.srcElement.getAttribute('data-pure-text'),
			puristText = el.srcElement.getAttribute('data-purist-text'),
			maxLength  = parseInt( el.srcElement.getAttribute('data-max-length') ),
			minLength  = parseInt( el.srcElement.getAttribute('data-min-length') ),
			lowercase  = el.srcElement.getAttribute('data-lowercase'),
			uppercase  = el.srcElement.getAttribute('data-uppercase'),
			noSpaces   = el.srcElement.getAttribute('data-nospaces'),
			//Number validation
			intOnly    = el.srcElement.getAttribute('data-int'),
			floatOnly  = el.srcElement.getAttribute('data-float'),
			maxNumber  = parseFloat( el.srcElement.getAttribute('data-max-number') ),
			minNumber  = parseFloat( el.srcElement.getAttribute('data-min-number') );

		if( textOnly === 'true' ) {
			el.srcElement.value = value.replace(/[0-9]/g,'');
			value = el.srcElement.value.replace(/[0-9]/g,'');
		}

		if( pureText === 'true' ) {
			el.srcElement.value = value.replace(/\W/g,'').replace(/_/g,'');
			value = el.srcElement.value.replace(/\W/g,'').replace(/_/g,'');
		}

		if( puristText === 'true' ) {
			el.srcElement.value = value.replace(/\W/g,'').replace(/_/g,'').replace(/[0-9]/g,'');
			value = el.srcElement.value.replace(/\W/g,'').replace(/_/g,'').replace(/[0-9]/g,'');
		}

		if( lowercase  === 'true' ) {
			el.srcElement.value = value.toLowerCase();
			value = value.toLowerCase();
		}

		if( uppercase === 'true' ) {
			el.srcElement.value = value.toUpperCase();
			value = value.toUpperCase();
		}

		if( noSpaces === 'true' ) {
			el.srcElement.value = value.replace(/\s/g,'');
			value = el.srcElement.value.replace(/\s/g,'');
		}

		if( intOnly === 'true' ) {
			el.srcElement.value = value.replace(/[^0-9]/g,'');
			value = el.srcElement.value.replace(/[^0-9]/g,'');
		}

		if( floatOnly === 'true' ) {
			
			el.srcElement.value = value.replace(/([^0-9.])/g,'');
			value = el.srcElement.value.replace(/([^0-9.])/g,'');
			
			var index = value.indexOf('.');
			
			if( index !== -1 ){

				el.srcElement.value = value.replace(/[.]/g,'');
				value = el.srcElement.value.replace(/[.]/g,'');

				el.srcElement.value = value.substring(0, index) + "." + value.substr(index);
				value = value.substring(0, index) + "." + value.substr(index);

			}
			
		}

		// Max and min length check's must be done otherwise false results will occur (even can be applied to numeric field's) 

		if( maxLength > 0 ) {
			el.srcElement.value = value.substr(0,parseInt(maxLength));
			value = value.substr(0,parseInt(maxLength));
		}

		if( typeof maxNumber === 'number' ) {
			if( parseFloat(value) > maxNumber ) {
				el.srcElement.value = maxNumber;
				value = maxNumber;
			}
		}

		if( minLength > 0 || typeof minNumber === 'number' ) {
			el.srcElement.onblur = function(){

				if( el.srcElement.value.length < parseInt(minLength) ) {
					el.srcElement.value = '';
				}

				if( typeof minNumber === 'number' ) {
					if( parseFloat(value) < minNumber ) {
						el.srcElement.value = minNumber;
						value = minNumber;
					}
				}

			};
		}
	
	});

}