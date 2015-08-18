


<!DOCTYPE html>
<html lang="en" class=" is-copy-enabled">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=1020">
    
    
    <title>phonegap-plugin-wizCanvas/README.md at master · Wizcorp/phonegap-plugin-wizCanvas</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="Wizcorp/phonegap-plugin-wizCanvas" name="twitter:title" /><meta content="phonegap-plugin-wizCanvas - WizCanvas allows a developer to create a ultra-performant native canvas component. The view is based on the Ejecta framework and has WebGL support." name="twitter:description" /><meta content="https://avatars0.githubusercontent.com/u/592346?v=3&amp;s=400" name="twitter:image:src" />
      <meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars0.githubusercontent.com/u/592346?v=3&amp;s=400" property="og:image" /><meta content="Wizcorp/phonegap-plugin-wizCanvas" property="og:title" /><meta content="https://github.com/Wizcorp/phonegap-plugin-wizCanvas" property="og:url" /><meta content="phonegap-plugin-wizCanvas - WizCanvas allows a developer to create a ultra-performant native canvas component. The view is based on the Ejecta framework and has WebGL support." property="og:description" />
      <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">
    <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">
    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="web-socket" href="wss://live.github.com/_sockets/MTMxNjE4MDA6ZDUwNGI4MmNmMTYyNWVhOTk0ZjUwMjBkYmMyMjZjZTE6YTA4NWUzOGFlNGQwMWRjZWZlMjMwMTllMjM4M2EyYmZkMmRhNDJhOTEyZTk5MjU4NzBlMjk1NThlNjM5ZjZmMQ==--725d54196f936481205fc702e368ea1c3fc63459">
    <meta name="pjax-timeout" content="1000">
    <link rel="sudo-modal" href="/sessions/sudo_modal">

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>

        <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="5218BE62:3D47:A88EADA:55D388C1" name="octolytics-dimension-request_id" /><meta content="13161800" name="octolytics-actor-id" /><meta content="Modcat" name="octolytics-actor-login" /><meta content="42b57704cb185717cc1b6f4f33bcfc5c0c7900af6c0607cecf36faf5f0073d71" name="octolytics-actor-hash" />
    
    <meta content="Rails, view, blob#show" data-pjax-transient="true" name="analytics-event" />
    <meta class="js-ga-set" name="dimension1" content="Logged In">
      <meta class="js-ga-set" name="dimension4" content="Current repo nav">
    <meta name="is-dotcom" content="true">
        <meta name="hostname" content="github.com">
    <meta name="user-login" content="Modcat">

      <link rel="icon" sizes="any" mask href="https://assets-cdn.github.com/pinned-octocat.svg">
      <meta name="theme-color" content="#4078c0">
      <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">

    <!-- </textarea> --><!-- '"` --><meta content="authenticity_token" name="csrf-param" />
<meta content="Of0sCWeIY0AbiaESvz0uP0l5f2U36ZIPtQRRLEYXS+0yh8lAlNWa968xvwcFJkB3c+E6+Abc2j72wxZMSbL3Mw==" name="csrf-token" />
    

    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github/index-ce6f4be3ac86c80d26386e89dab12306e2663d0673dbcecb4cee57b1dc3585cb.css" media="all" rel="stylesheet" />
    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github2/index-f717e72e116159102ffa893caf9e0a3d2189464fceceb966e342e0799334a12a.css" media="all" rel="stylesheet" />
    
    


    <meta http-equiv="x-pjax-version" content="bd403a6c50983589d5fbf4ba127e9110">

      
  <meta name="description" content="phonegap-plugin-wizCanvas - WizCanvas allows a developer to create a ultra-performant native canvas component. The view is based on the Ejecta framework and has WebGL support.">
  <meta name="go-import" content="github.com/Wizcorp/phonegap-plugin-wizCanvas git https://github.com/Wizcorp/phonegap-plugin-wizCanvas.git">

  <meta content="592346" name="octolytics-dimension-user_id" /><meta content="Wizcorp" name="octolytics-dimension-user_login" /><meta content="12773826" name="octolytics-dimension-repository_id" /><meta content="Wizcorp/phonegap-plugin-wizCanvas" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="12773826" name="octolytics-dimension-repository_network_root_id" /><meta content="Wizcorp/phonegap-plugin-wizCanvas" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/Wizcorp/phonegap-plugin-wizCanvas/commits/master.atom" rel="alternate" title="Recent Commits to phonegap-plugin-wizCanvas:master" type="application/atom+xml">

  </head>


  <body class="logged_in  env-production macintosh vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      



        <div class="header header-logged-in true" role="banner">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/" data-hotkey="g d" aria-label="Homepage" data-ga-click="Header, go to dashboard, icon:logo">
  <span class="mega-octicon octicon-mark-github"></span>
</a>


      <div class="site-search repo-scope js-site-search" role="search">
          <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/Wizcorp/phonegap-plugin-wizCanvas/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/Wizcorp/phonegap-plugin-wizCanvas/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <label class="js-chromeless-input-container form-control">
    <div class="scope-badge">This repository</div>
    <input type="text"
      class="js-site-search-focus js-site-search-field is-clearable chromeless-input"
      data-hotkey="s"
      name="q"
      placeholder="Search"
      aria-label="Search this repository"
      data-global-scope-placeholder="Search GitHub"
      data-repo-scope-placeholder="Search"
      tabindex="1"
      autocapitalize="off">
  </label>
</form>
      </div>

      <ul class="header-nav left" role="navigation">
        <li class="header-nav-item">
          <a href="/pulls" class="js-selected-navigation-item header-nav-link" data-ga-click="Header, click, Nav menu - item:pulls context:user" data-hotkey="g p" data-selected-links="/pulls /pulls/assigned /pulls/mentioned /pulls">
            Pull requests
</a>        </li>
        <li class="header-nav-item">
          <a href="/issues" class="js-selected-navigation-item header-nav-link" data-ga-click="Header, click, Nav menu - item:issues context:user" data-hotkey="g i" data-selected-links="/issues /issues/assigned /issues/mentioned /issues">
            Issues
</a>        </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://gist.github.com/" data-ga-click="Header, go to gist, text:gist">Gist</a>
          </li>
      </ul>

    
<ul class="header-nav user-nav right" id="user-links">
  <li class="header-nav-item">
      <span class="js-socket-channel js-updatable-content"
        data-channel="notification-changed:Modcat"
        data-url="/notifications/header">
      <a href="/notifications" aria-label="You have no unread notifications" class="header-nav-link notification-indicator tooltipped tooltipped-s" data-ga-click="Header, go to notifications, icon:read" data-hotkey="g n">
          <span class="mail-status all-read"></span>
          <span class="octicon octicon-inbox"></span>
</a>  </span>

  </li>

  <li class="header-nav-item dropdown js-menu-container">
    <a class="header-nav-link tooltipped tooltipped-s js-menu-target" href="/new"
       aria-label="Create new…"
       data-ga-click="Header, create new, icon:add">
      <span class="octicon octicon-plus left"></span>
      <span class="dropdown-caret"></span>
    </a>

    <div class="dropdown-menu-content js-menu-content">
      <ul class="dropdown-menu dropdown-menu-sw">
        
<a class="dropdown-item" href="/new" data-ga-click="Header, create new repository">
  New repository
</a>


  <a class="dropdown-item" href="/organizations/new" data-ga-click="Header, create new organization">
    New organization
  </a>



  <div class="dropdown-divider"></div>
  <div class="dropdown-header">
    <span title="Wizcorp/phonegap-plugin-wizCanvas">This repository</span>
  </div>
    <a class="dropdown-item" href="/Wizcorp/phonegap-plugin-wizCanvas/issues/new" data-ga-click="Header, create new issue">
      New issue
    </a>

      </ul>
    </div>
  </li>

  <li class="header-nav-item dropdown js-menu-container">
    <a class="header-nav-link name tooltipped tooltipped-s js-menu-target" href="/Modcat"
       aria-label="View profile and more"
       data-ga-click="Header, show menu, icon:avatar">
      <img alt="@Modcat" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/13161800?v=3&amp;s=40" width="20" />
      <span class="dropdown-caret"></span>
    </a>

    <div class="dropdown-menu-content js-menu-content">
      <div class="dropdown-menu dropdown-menu-sw">
        <div class="dropdown-header header-nav-current-user css-truncate">
          Signed in as <strong class="css-truncate-target">Modcat</strong>
        </div>
        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="/Modcat" data-ga-click="Header, go to profile, text:your profile">
          Your profile
        </a>
        <a class="dropdown-item" href="/stars" data-ga-click="Header, go to starred repos, text:your stars">
          Your stars
        </a>
        <a class="dropdown-item" href="/explore" data-ga-click="Header, go to explore, text:explore">
          Explore
        </a>
        <a class="dropdown-item" href="https://help.github.com" data-ga-click="Header, go to help, text:help">
          Help
        </a>
        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="/settings/profile" data-ga-click="Header, go to settings, icon:settings">
          Settings
        </a>

        <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/logout" class="logout-form" data-form-nonce="d09838185fea9ec5b7856225f388e1b06780e5b8" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="94zU9QTaeBoR+uhT+TLcfnBxgxiygMw5mxTdB5T5XznJ40/pKUnRjmyL8aQrmJFQCVlwGy+oXX0jR9Cw+1/7JA==" /></div>
          <button class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
            Sign out
          </button>
</form>      </div>
    </div>
  </li>
</ul>


    
  </div>
</div>

        

        


      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu ">
      <div class="container">

        <div class="clearfix">
          
<ul class="pagehead-actions">

  <li>
      <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-form-nonce="d09838185fea9ec5b7856225f388e1b06780e5b8" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="si3o3j4FF1pNYX+sF+SmkyQ4BoviGMPfSk0LEag7R2rPj5jduryW9BwptHYHt6bQIUNQZvTVapAVMNpUODms7Q==" /></div>    <input id="repository_id" name="repository_id" type="hidden" value="12773826" />

      <div class="select-menu js-menu-container js-select-menu">
        <a href="/Wizcorp/phonegap-plugin-wizCanvas/subscription"
          class="btn btn-sm btn-with-count select-menu-button js-menu-target" role="button" tabindex="0" aria-haspopup="true"
          data-ga-click="Repository, click Watch settings, action:blob#show">
          <span class="js-select-button">
            <span class="octicon octicon-eye"></span>
            Watch
          </span>
        </a>
        <a class="social-count js-social-count" href="/Wizcorp/phonegap-plugin-wizCanvas/watchers">
          10
        </a>

        <div class="select-menu-modal-holder">
          <div class="select-menu-modal subscription-menu-modal js-menu-content" aria-hidden="true">
            <div class="select-menu-header">
              <span class="select-menu-title">Notifications</span>
              <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
            </div>

            <div class="select-menu-list js-navigation-container" role="menu">

              <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
                <span class="select-menu-item-icon octicon octicon-check"></span>
                <div class="select-menu-item-text">
                  <input checked="checked" id="do_included" name="do" type="radio" value="included" />
                  <span class="select-menu-item-heading">Not watching</span>
                  <span class="description">Be notified when participating or @mentioned.</span>
                  <span class="js-select-button-text hidden-select-button-text">
                    <span class="octicon octicon-eye"></span>
                    Watch
                  </span>
                </div>
              </div>

              <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
                <span class="select-menu-item-icon octicon octicon octicon-check"></span>
                <div class="select-menu-item-text">
                  <input id="do_subscribed" name="do" type="radio" value="subscribed" />
                  <span class="select-menu-item-heading">Watching</span>
                  <span class="description">Be notified of all conversations.</span>
                  <span class="js-select-button-text hidden-select-button-text">
                    <span class="octicon octicon-eye"></span>
                    Unwatch
                  </span>
                </div>
              </div>

              <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
                <span class="select-menu-item-icon octicon octicon-check"></span>
                <div class="select-menu-item-text">
                  <input id="do_ignore" name="do" type="radio" value="ignore" />
                  <span class="select-menu-item-heading">Ignoring</span>
                  <span class="description">Never be notified.</span>
                  <span class="js-select-button-text hidden-select-button-text">
                    <span class="octicon octicon-mute"></span>
                    Stop ignoring
                  </span>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
</form>
  </li>

  <li>
    
  <div class="js-toggler-container js-social-container starring-container ">

    <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/Wizcorp/phonegap-plugin-wizCanvas/unstar" class="js-toggler-form starred js-unstar-button" data-form-nonce="d09838185fea9ec5b7856225f388e1b06780e5b8" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="dvQB3B+4dWqvxnmKuCPYMjLWQbsBQLctjfwjCB6t798NawpCzhaXESLH6M/XGE6LQPrf8ab1xseky+kteEIBnA==" /></div>
      <button
        class="btn btn-sm btn-with-count js-toggler-target"
        aria-label="Unstar this repository" title="Unstar Wizcorp/phonegap-plugin-wizCanvas"
        data-ga-click="Repository, click unstar button, action:blob#show; text:Unstar">
        <span class="octicon octicon-star"></span>
        Unstar
      </button>
        <a class="social-count js-social-count" href="/Wizcorp/phonegap-plugin-wizCanvas/stargazers">
          42
        </a>
</form>
    <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/Wizcorp/phonegap-plugin-wizCanvas/star" class="js-toggler-form unstarred js-star-button" data-form-nonce="d09838185fea9ec5b7856225f388e1b06780e5b8" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="IQPxcCyZeg3HxC9ZYsHzts/GcvJqyQgCel5bRYxh+37C0DhYkV74Gi12C0J6dJlckuj3VxBCUQPAWpz85F4/wA==" /></div>
      <button
        class="btn btn-sm btn-with-count js-toggler-target"
        aria-label="Star this repository" title="Star Wizcorp/phonegap-plugin-wizCanvas"
        data-ga-click="Repository, click star button, action:blob#show; text:Star">
        <span class="octicon octicon-star"></span>
        Star
      </button>
        <a class="social-count js-social-count" href="/Wizcorp/phonegap-plugin-wizCanvas/stargazers">
          42
        </a>
</form>  </div>

  </li>

        <li>
          <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/Wizcorp/phonegap-plugin-wizCanvas/fork" data-form-nonce="d09838185fea9ec5b7856225f388e1b06780e5b8" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="PJxeeuorG0kTlru8yenXPVVnR2a7vB74vyJtp2BgBoZkbay90QZ4P5YvE3EyqxtWXlYfbuWOaR+gs9gJP/wA7Q==" /></div>
            <button
                type="submit"
                class="btn btn-sm btn-with-count"
                data-ga-click="Repository, show fork modal, action:blob#show; text:Fork"
                title="Fork your own copy of Wizcorp/phonegap-plugin-wizCanvas to your account"
                aria-label="Fork your own copy of Wizcorp/phonegap-plugin-wizCanvas to your account">
              <span class="octicon octicon-repo-forked"></span>
              Fork
            </button>
            <a href="/Wizcorp/phonegap-plugin-wizCanvas/network" class="social-count">15</a>
</form>        </li>

</ul>

          <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public ">
            <span class="mega-octicon octicon-repo"></span>
            <span class="author"><a href="/Wizcorp" class="url fn" itemprop="url" rel="author"><span itemprop="title">Wizcorp</span></a></span><!--
         --><span class="path-divider">/</span><!--
         --><strong><a href="/Wizcorp/phonegap-plugin-wizCanvas" data-pjax="#js-repo-pjax-container">phonegap-plugin-wizCanvas</a></strong>

            <span class="page-context-loader">
              <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
            </span>

          </h1>
        </div>

      </div>
    </div>

      <div class="container">
        <div class="repository-with-sidebar repo-container new-discussion-timeline ">
          <div class="repository-sidebar clearfix">
              

<nav class="sunken-menu repo-nav js-repo-nav js-sidenav-container-pjax js-octicon-loaders"
     role="navigation"
     data-pjax="#js-repo-pjax-container"
     data-issue-count-url="/Wizcorp/phonegap-plugin-wizCanvas/issues/counts">
  <ul class="sunken-menu-group">
    <li class="tooltipped tooltipped-w" aria-label="Code">
      <a href="/Wizcorp/phonegap-plugin-wizCanvas" aria-label="Code" aria-selected="true" class="js-selected-navigation-item selected sunken-menu-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /Wizcorp/phonegap-plugin-wizCanvas">
        <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>

      <li class="tooltipped tooltipped-w" aria-label="Issues">
        <a href="/Wizcorp/phonegap-plugin-wizCanvas/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /Wizcorp/phonegap-plugin-wizCanvas/issues">
          <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
          <span class="js-issue-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

    <li class="tooltipped tooltipped-w" aria-label="Pull requests">
      <a href="/Wizcorp/phonegap-plugin-wizCanvas/pulls" aria-label="Pull requests" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g p" data-selected-links="repo_pulls /Wizcorp/phonegap-plugin-wizCanvas/pulls">
          <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull requests</span>
          <span class="js-pull-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>

      <li class="tooltipped tooltipped-w" aria-label="Wiki">
        <a href="/Wizcorp/phonegap-plugin-wizCanvas/wiki" aria-label="Wiki" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g w" data-selected-links="repo_wiki /Wizcorp/phonegap-plugin-wizCanvas/wiki">
          <span class="octicon octicon-book"></span> <span class="full-word">Wiki</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
  </ul>
  <div class="sunken-menu-separator"></div>
  <ul class="sunken-menu-group">

    <li class="tooltipped tooltipped-w" aria-label="Pulse">
      <a href="/Wizcorp/phonegap-plugin-wizCanvas/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-selected-links="pulse /Wizcorp/phonegap-plugin-wizCanvas/pulse">
        <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>

    <li class="tooltipped tooltipped-w" aria-label="Graphs">
      <a href="/Wizcorp/phonegap-plugin-wizCanvas/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-selected-links="repo_graphs repo_contributors /Wizcorp/phonegap-plugin-wizCanvas/graphs">
        <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>
  </ul>


</nav>

                <div class="only-with-full-nav">
                    
<div class="js-clone-url clone-url open"
  data-protocol-type="http">
  <h3><span class="text-emphasized">HTTPS</span> clone URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/Wizcorp/phonegap-plugin-wizCanvas.git" readonly="readonly" aria-label="HTTPS clone URL">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="js-clone-url clone-url "
  data-protocol-type="ssh">
  <h3><span class="text-emphasized">SSH</span> clone URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="git@github.com:Wizcorp/phonegap-plugin-wizCanvas.git" readonly="readonly" aria-label="SSH clone URL">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="js-clone-url clone-url "
  data-protocol-type="subversion">
  <h3><span class="text-emphasized">Subversion</span> checkout URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/Wizcorp/phonegap-plugin-wizCanvas" readonly="readonly" aria-label="Subversion checkout URL">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>



  <div class="clone-options">You can clone with
    <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone" class="inline-form js-clone-selector-form is-enabled" data-form-nonce="d09838185fea9ec5b7856225f388e1b06780e5b8" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="9u4Nt9y5Q4dOj4SyFcZL+Ou+LkpXC7F1BjxlSK99yo2eNzBhudTappMzU7JCybNzDcXA6eAxU6geTt7zREUhCw==" /></div><button class="btn-link js-clone-selector" data-protocol="http" type="submit">HTTPS</button></form>, <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/users/set_protocol?protocol_selector=ssh&amp;protocol_type=clone" class="inline-form js-clone-selector-form is-enabled" data-form-nonce="d09838185fea9ec5b7856225f388e1b06780e5b8" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="IapxnmykdvYGnu260nSUVsEv3qMbnd2F9RcgIAJJJWS05b+hpDh6lNb15P4hzbM85pi+3ggnEfR2CJ6/kBPd9g==" /></div><button class="btn-link js-clone-selector" data-protocol="ssh" type="submit">SSH</button></form>, or <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone" class="inline-form js-clone-selector-form is-enabled" data-form-nonce="d09838185fea9ec5b7856225f388e1b06780e5b8" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="D6LPeV4JdKRBYGJcCeW8UQMbx3mvYhkRvDfk8Eg7zikNtuKVlL/eiCFn6yKC9P+Dm88HuLWOCrNQxE0Y0FXEyA==" /></div><button class="btn-link js-clone-selector" data-protocol="subversion" type="submit">Subversion</button></form>.
    <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
      <span class="octicon octicon-question"></span>
    </a>
  </div>
    <a href="github-mac://openRepo/https://github.com/Wizcorp/phonegap-plugin-wizCanvas" class="btn btn-sm sidebar-button" title="Save Wizcorp/phonegap-plugin-wizCanvas to your computer and use it in GitHub Desktop." aria-label="Save Wizcorp/phonegap-plugin-wizCanvas to your computer and use it in GitHub Desktop.">
      <span class="octicon octicon-desktop-download"></span>
      Clone in Desktop
    </a>

                  <a href="/Wizcorp/phonegap-plugin-wizCanvas/archive/master.zip"
                     class="btn btn-sm sidebar-button"
                     aria-label="Download the contents of Wizcorp/phonegap-plugin-wizCanvas as a zip file"
                     title="Download the contents of Wizcorp/phonegap-plugin-wizCanvas as a zip file"
                     rel="nofollow">
                    <span class="octicon octicon-cloud-download"></span>
                    Download ZIP
                  </a>
                </div>
          </div>
          <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>

            

<a href="/Wizcorp/phonegap-plugin-wizCanvas/blob/9110ebc2ee889c6739e63a502145fc08c10af7f4/README.md" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:ff7eb0f0497799469a4bd2bb9e47a3bb -->

  <div class="file-navigation js-zeroclipboard-container">
    
<div class="select-menu js-menu-container js-select-menu left">
  <span class="btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w"
    data-ref="master"
    title="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <i>Branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab" role="tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab" role="tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches" role="menu">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Wizcorp/phonegap-plugin-wizCanvas/blob/develop/README.md"
               data-name="develop"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="develop">
                develop
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open selected"
               href="/Wizcorp/phonegap-plugin-wizCanvas/blob/master/README.md"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="master">
                master
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Wizcorp/phonegap-plugin-wizCanvas/blob/v2.7/README.md"
               data-name="v2.7"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="v2.7">
                v2.7
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Wizcorp/phonegap-plugin-wizCanvas/blob/v3.0-android/README.md"
               data-name="v3.0-android"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="v3.0-android">
                v3.0-android
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Wizcorp/phonegap-plugin-wizCanvas/blob/v3.3/README.md"
               data-name="v3.3"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="v3.3">
                v3.3
              </span>
            </a>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Wizcorp/phonegap-plugin-wizCanvas/tree/v3.0_1.1.0/README.md"
                 data-name="v3.0_1.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v3.0_1.1.0">v3.0_1.1.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Wizcorp/phonegap-plugin-wizCanvas/tree/v3.0_1.0.0/README.md"
                 data-name="v3.0_1.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v3.0_1.0.0">v3.0_1.0.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Wizcorp/phonegap-plugin-wizCanvas/tree/v2.1.0/README.md"
                 data-name="v2.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v2.1.0">v2.1.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Wizcorp/phonegap-plugin-wizCanvas/tree/v2.0.1/README.md"
                 data-name="v2.0.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v2.0.1">v2.0.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Wizcorp/phonegap-plugin-wizCanvas/tree/v2.0.0/README.md"
                 data-name="v2.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v2.0.0">v2.0.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Wizcorp/phonegap-plugin-wizCanvas/tree/v1.1.3/README.md"
                 data-name="v1.1.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.1.3">v1.1.3</a>
            </div>
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

    <div class="btn-group right">
      <a href="/Wizcorp/phonegap-plugin-wizCanvas/find/master"
            class="js-show-file-finder btn btn-sm empty-icon tooltipped tooltipped-nw"
            data-pjax
            data-hotkey="t"
            aria-label="Quickly jump between files">
        <span class="octicon octicon-list-unordered"></span>
      </a>
      <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </div>

    <div class="breadcrumb js-zeroclipboard-target">
      <span class="repo-root js-repo-root"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Wizcorp/phonegap-plugin-wizCanvas" class="" data-branch="master" data-pjax="true" itemscope="url"><span itemprop="title">phonegap-plugin-wizCanvas</span></a></span></span><span class="separator">/</span><strong class="final-path">README.md</strong>
    </div>
  </div>

<include-fragment class="commit commit-loader file-history-tease" src="/Wizcorp/phonegap-plugin-wizCanvas/contributors/master/README.md">
  <div class="file-history-tease-header">
    Fetching contributors&hellip;
  </div>

  <div class="participation">
    <p class="loader-loading"><img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32-EAF2F5.gif" width="16" /></p>
    <p class="loader-error">Cannot retrieve contributors at this time</p>
  </div>
</include-fragment>
<div class="file">
  <div class="file-header">
    <div class="file-actions">

      <div class="btn-group">
        <a href="/Wizcorp/phonegap-plugin-wizCanvas/raw/master/README.md" class="btn btn-sm " id="raw-url">Raw</a>
          <a href="/Wizcorp/phonegap-plugin-wizCanvas/blame/master/README.md" class="btn btn-sm js-update-url-with-hash">Blame</a>
        <a href="/Wizcorp/phonegap-plugin-wizCanvas/commits/master/README.md" class="btn btn-sm " rel="nofollow">History</a>
      </div>

        <a class="octicon-btn tooltipped tooltipped-nw"
           href="github-mac://openRepo/https://github.com/Wizcorp/phonegap-plugin-wizCanvas?branch=master&amp;filepath=README.md"
           aria-label="Open this file in GitHub Desktop"
           data-ga-click="Repository, open with desktop, type:mac">
            <span class="octicon octicon-desktop-download"></span>
        </a>

            <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/Wizcorp/phonegap-plugin-wizCanvas/edit/master/README.md" class="inline-form" data-form-nonce="d09838185fea9ec5b7856225f388e1b06780e5b8" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="/InnLrbhLzDDEI9lkPD77AOBLQ6Q6WOI2T8P85fUEmvLdpWKpwnuwxIZOD9jsVnPhFn40K8SWu9GKUK4XPuDSg==" /></div>
              <button class="octicon-btn tooltipped tooltipped-n" type="submit" aria-label="Fork this project and edit the file" data-hotkey="e" data-disable-with>
                <span class="octicon octicon-pencil"></span>
              </button>
</form>
          <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/Wizcorp/phonegap-plugin-wizCanvas/delete/master/README.md" class="inline-form" data-form-nonce="d09838185fea9ec5b7856225f388e1b06780e5b8" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="pkV/XyGENTJRRKtQd7zcDQFggBq8MjVTadspgL6H11wP+v6EU8g93+qfaGOLCrdSiTbyklYvydky+oBq/wuk4Q==" /></div>
            <button class="octicon-btn octicon-btn-danger tooltipped tooltipped-n" type="submit" aria-label="Fork this project and delete this file" data-disable-with>
              <span class="octicon octicon-trashcan"></span>
            </button>
</form>    </div>

    <div class="file-info">
        147 lines (93 sloc)
        <span class="file-info-divider"></span>
      4.081 kB
    </div>
  </div>
  
  <div id="readme" class="blob instapaper_body">
    <article class="markdown-body entry-content" itemprop="mainContentOfPage"><h1><a id="user-content-phonegap-plugin-wizcanvas" class="anchor" href="#phonegap-plugin-wizcanvas" aria-hidden="true"><span class="octicon octicon-link"></span></a>phonegap-plugin-wizCanvas</h1>

<ul>
<li>PhoneGap Version : 3.3</li>
</ul>

<h2><a id="user-content-description" class="anchor" href="#description" aria-hidden="true"><span class="octicon octicon-link"></span></a>Description</h2>

<p>PhoneGap plugin for creating and manipulating native canvas without UIWebView for ultra performance.</p>

<h2><a id="user-content-install-with-plugman" class="anchor" href="#install-with-plugman" aria-hidden="true"><span class="octicon octicon-link"></span></a>Install (with Plugman)</h2>

<pre><code>cordova plugin add https://github.com/Wizcorp/phonegap-plugin-wizCanvas
cordova build

&lt; or &gt;

phonegap local plugin add https://github.com/Wizcorp/phonegap-plugin-wizCanvas
phonegap build
</code></pre>

<h2><a id="user-content-booting" class="anchor" href="#booting" aria-hidden="true"><span class="octicon octicon-link"></span></a>Booting</h2>

<p>wizCanvas looks automatically for an index.js file in <code>www/assets/canvas/</code> if you wish to ignore this and load from another relative location, use <code>wizCanvas.load()</code>.</p>

<h3><a id="user-content-additional-steps-in-xcode" class="anchor" href="#additional-steps-in-xcode" aria-hidden="true"><span class="octicon octicon-link"></span></a>Additional Steps in Xcode</h3>

<p>In Xcode Build Settings, add the following 2 lines in the Header Path</p>

<pre><code>"$(SRCROOT)/&lt;your project name&gt;/Plugins/jp.wizcorp.phonegap.plugin.wizCanvasPlugin/lib"
"$(SRCROOT)/&lt;your project name&gt;/Plugins/jp.wizcorp.phonegap.plugin.wizCanvasPlugin/lib/JavaScriptCore"
</code></pre>

<p>In Xcode Build Settings, add the following 2 lines in the Library Search Path</p>

<pre><code>"$(SRCROOT)/&lt;your project name&gt;/Plugins/jp.wizcorp.phonegap.plugin.wizCanvasPlugin/lib"
"$(SRCROOT)/&lt;your project name&gt;/Plugins/jp.wizcorp.phonegap.plugin.wizCanvasPlugin/lib/JavaScriptCore"
</code></pre>

<p>In Xcode Build Settings remove <code>armv7s</code> from valid architectures.</p>

<h2><a id="user-content-apis" class="anchor" href="#apis" aria-hidden="true"><span class="octicon octicon-link"></span></a>APIs</h2>

<h3><a id="user-content-create" class="anchor" href="#create" aria-hidden="true"><span class="octicon octicon-link"></span></a>Create</h3>

<p>Currently, only 1 canvas view can be created. View is hidden after creation.</p>

<pre><code>wizCanvas.create(String viewName, JSONObject options, Function success, Function fail);
</code></pre>

<p>Options list;</p>

<pre><code>{
    src: "my/local/script.js" [relative to www/]
    height: 300, [accepts "300px", "30%" - default: fills height] 
    width: 300, [accepts "300px", "30%" - default: fills width] 
    x: 0,
    y: 0, 
    top: 0, [string, pixels or percent - default: 0]
    bottom: 0, [string, pixels or percent - default: 0]
    left: 0, [pixels or percent - default: 0]    
    right: 0, [string, pixels or percent - default: 0]
    backgroundColor: [Colour as hex RGB/ARGB/RRGGBB or "transparent"]
    onTop: false [Default: true. Transparency can only be used when onTop is true][Android Only]
}; 
</code></pre>

<p>** Note - Android does not yet support String " px" values or " %" values ** </p>

<h3><a id="user-content-load" class="anchor" href="#load" aria-hidden="true"><span class="octicon octicon-link"></span></a>Load</h3>

<pre><code>wizCanvas.load(String viewName, String URI or URL, Function success, Function fail);
</code></pre>

<h3><a id="user-content-set-layout" class="anchor" href="#set-layout" aria-hidden="true"><span class="octicon octicon-link"></span></a>Set Layout</h3>

<pre><code>wizCanvas.setLayout(String viewName, JSONObject options, Function success, Function fail);
</code></pre>

<p>See <code>create</code> API for a list of options.</p>

<h3><a id="user-content-show" class="anchor" href="#show" aria-hidden="true"><span class="octicon octicon-link"></span></a>Show</h3>

<pre><code>wizCanvas.show(String viewName, JSONObject options, Function success, Function fail);
</code></pre>

<p>A list of animations;</p>

<ul>
<li>slideInFromLeft</li>
<li>slideInFromRight</li>
<li>slideInFromTop</li>
<li>slideInFromBottom</li>
<li>fadeIn</li>
</ul>

<p>Example animation Object;</p>

<pre><code>options : {
    animation: {
        type: "fadeIn", 
        duration: "300"
    }
};
</code></pre>

<p>** NOTE : Animation options not yet fully supported! **</p>

<h3><a id="user-content-hide" class="anchor" href="#hide" aria-hidden="true"><span class="octicon octicon-link"></span></a>Hide</h3>

<pre><code>wizCanvas.hide(String viewName, JSONObject options, Function success, Function fail);
</code></pre>

<p>A list of animations;</p>

<ul>
<li>slideOutFromLeft</li>
<li>slideOutFromRight</li>
<li>slideOutFromTop</li>
<li>slideOutFromBottom</li>
<li>fadeOut</li>
</ul>

<p>Example animation Object;</p>

<pre><code>options : {
    animation: {
        type: "fadeOut",
        duration: "300"
    }
}; 
</code></pre>

<p>** NOTE : Animation options not yet fully supported! **</p>

<h3><a id="user-content-messaging" class="anchor" href="#messaging" aria-hidden="true"><span class="octicon octicon-link"></span></a>Messaging</h3>

<p>To send a messsage to a view based on W3C post message API... for more information on the MessageEvent API, see: <a href="http://www.w3.org/TR/2008/WD-html5-20080610/comms.HTMLElement">http://www.w3.org/TR/2008/WD-html5-20080610/comms.HTMLElement</a></p>

<pre><code>wizCanvasMessenger.postMessage(Data message, String targetView);
</code></pre>

<ul>
<li><code>message</code> is Data as Array, String, Number, Object</li>
<li><code>targetView</code> is the string name of the target view.</li>
<li>to reach Cordova window, <code>targetView</code> = <code>"mainView"</code></li>
</ul>

<p>Add an event listener in the html that wishes to receive the message...</p>

<pre><code>window.addEventListener('message', listeningFunction, false);
</code></pre>

<p>In canvas use the following to receive messages from Cordova's page</p>

<pre><code>wizCanvasMessenger.addEventListener('message', listeningFunction);
</code></pre>

<p>Example receiver;</p>

<pre><code>function listeningFunction (e) {
    // Event data object comes in here
    // e.data - message data
    // e.origin - the origin of the data
    // e.target - the target for the data
}
</code></pre>
</article>
  </div>

</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="" class="js-jump-to-line-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" aria-label="Jump to line" autofocus>
    <button type="submit" class="btn">Go</button>
</form></div>

          </div>
        </div>
        <div class="modal-backdrop"></div>
      </div>
  </div>


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
      <li><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>
        <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>

    </ul>

    <a href="https://github.com" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
</a>
    <ul class="site-footer-links">
      <li>&copy; 2015 <span title="0.08086s from github-fe118-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact</a></li>
    </ul>
  </div>
</div>


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-suggester-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder="" aria-label=""></textarea>
      <div class="suggester-container">
        <div class="suggester fullscreen-suggester js-suggester js-navigation-container"></div>
      </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    
    

    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x flash-close js-ajax-error-dismiss" aria-label="Dismiss error"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-b8bb6ec61f9699575b20bf19ef0781a267528db51d66151c51d5ec2717341fd8.js"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github/index-929e188b8249c4fae03823aa95b94ba1dcee890856db3aff8bb71d3c57ab1af1.js"></script>
      
      
    <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner hidden">
      <span class="octicon octicon-alert"></span>
      <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
      <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
    </div>
  </body>
</html>

