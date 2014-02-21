
# CSS media reporter

A Wordpress plugin based on the work of [David Cochran](https://github.com/davidcochran/CSS3-Media-Query-Reporter). 

The plugin displays a dynamic version of David's CSS3 Media Reporter, i.e. @media breakpoints on the front end of your site, but only to admins. Actual pixel widths are updated by javascript.

This visual feedback is useful during the development of dynamic themes to troubleshoot browser width styling issues. 

Version: 0.1

Known issues:
	
- Rules that deal with the *html element and the js that calculates the browser width. These rules with negative padding and margins can give false pixel with.

- Break points are baked into the css. You will have to manually edit this to accommodate your particular needs. Making this editable via an admin settings page is on the roadmap.

Roadmap:
Make a admin settings pannel to:

	- set up custom rules and colours
	- set display text
	- offer common media breakpoints i.e. bootstrap responsive
	- Drag and drop the rule order so that it makes sense to the user
	- See the generated style sheet (something they can copy-paste)
	- add a custom CSS field where users may inject any custom css into the end of the stylesheet - for what ever reason they might want.

	Todo Notes:
	Increment a value between a range (think hsla numbers) for rule bg colour
	http://php.net/manual/en/function.range.php

	http://pippinsplugins.com/drag-and-drop-order-for-plugin-options/
	Drag & drop options

	Consider SQL menu order vs Plugin Options