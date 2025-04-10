# wptheme

=== Digital DIAREEs ===

 == Installation ==
 
 1. Clone this repo into your Themes directory of your WordPress installation.
 1. In your admin panel, go to Appearance > Themes. 
 3. Click Activate on the Digital DIAREEs Theme.

 == Styles and Scripts ==

 The parent theme has many complex styles/scripts and to ensure that these are not removed or changed unintentionally 
 specfic custom files have been created to and are to be used first before editing the parent theme.

 	- Dependencies
		- Nodejs v12.16.3 or higher
		- npm v6.14.4 or higher
		- from theme directory run: npm install.  This will install approprate node modules needed for styles.
		
	- To add styles 
		- navigate to /assets/css/source.scss
		- add Styles
		- in terminal on theme directory type npm run css
		- this command will run based on package.json file and will compile .scss file to custom-style.css
		- Do not alter custom-style.css file directly as everytime the styles are compile these changes will be overwritten
		- To watch for changes instead of compiling per change type: npm run watch.  This will ensure that evertime the source.scss file is changed the styles will automatically compile.
	- To add scripts 
		- navigate to /js/custom-script.js
		- add any scripts to this file
	- Note
		- These files are enqued in the functions.js file.
 
