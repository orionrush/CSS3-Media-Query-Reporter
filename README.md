
# WP Dynamic CSS3 Media Reporter

A Wordpress plugin based on the work of [David Cochran](https://github.com/davidcochran/CSS3-Media-Query-Reporter). 

The plugin displays a dynamic version of David's CSS3 Media Reporter, i.e. @media breakpoints are shown as a banner on the front end of your site, but only to admins that have logged in. Actual pixel widths of the browser window are dynamically updated via javascript.

This visual feedback is useful during the development of dynamic themes.

Known issues:

- Theme stylesheet rules that deal with the html and body elements and their width, margin and padding can cause the javascript which calculates the browser width to report a false pixel with.

- Break points are baked into the css. You will have to manually edit this to accommodate your particular needs. Making this editable via an admin settings page is on the roadmap.

### Roadmap:
Make a admin settings panel to allow the customisation of:

- breakpoint rules and colours
- set display text
- suggest common media breakpoints i.e. bootstrap responsive
- Drag and drop the rule orders so that it makes sense to the user
- output the generated style sheet (something they can copy-paste)
- add a custom CSS where users may inject any custom css into the end of the stylesheet - for what ever reason they might want.

### Notes:

- Increment a value between a range (think hsla numbers) for rule bg colour
http://php.net/manual/en/function.range.php
- Drag & drop options
http://pippinsplugins.com/drag-and-drop-order-for-plugin-options/
- Consider SQL menu order vs Plugin Options