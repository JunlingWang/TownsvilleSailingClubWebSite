This website is realized with Wordpress.
The used theme is twentysixteen.
The files in the twentysixteen-child override the files in the parent theme folder.
To enable overriding, proper comments and imports should be used in the stlye.css file.
Other files don't require any modification before being copied to the child theme file with the original name.

To make different pages display in different ways, several page templates are used.
In order to customize individual pages, there are three ways could be used.
1. Using "if" statement in the php code in the template file to discriminate different pages.
2. Naming the template file in the form of "page-name", and Wordpress will apply this file to the particular page. But this way, the template can be only applied to on page.
3. To apply the template to multiple pages, you can name the template at will, and put "Tamplate Name: name" into comment. Then you can choose template in the page editing interface.

To obtain hierarchical menu, go to dashboard/appearences/manues/, and drop and down to arrange the manu structure.

The header slides are realized with a plugin called "slide WD".
The full-width sliders can be made by the plugin settings.(slider/setting/global)
Grid layouts of the pages are realized with a plugin called "Post Grid", which requires featured image of pages to be shown in the grid blocks.
To Hide featured image in the pages, install a plugin called "Hide featured image".

The header logo above the menu bar is defined by hard coding in header.php file. If you want to move it to another hosting device, you need to upload the image again and change the url.
The padding and border of the image cannot be modified in stlye.css file, but adding additional css in the customize interface can solove this problem.

To hide page title, edit child theme's css file.
When there is no side bar in the page, you might want to enlarge the central area, whose class name is "content-area". You can simply delete the delaration of this class in the page template file, so that the div's width won't be affected by the css code which modifies it through the class name.

The "Post Grid" plugin displays blockes for all pages by default. To hide a page, you need to input the page id to the plugin's setting interface.
The following rows are the input string of different pages.
All:
368,366,235,160,158,164,156,429,434,374,19,439,387,162,377,381,2,423,431,426,442,383,379,437,385
Homepage:
368,366,235,160,158,164,156,429,434,439,423,431,426,442,437
Members:
235,160,158,164,156,429,434,374,19,439,387,162,377,381,2,431,426,442,383,379,437,385
Club racing:
368,366,235,160,158,164,156,429,374,19,439,387,162,377,381,2,423,431,442,383,379,437,385
learn to sail:
368,366,235,160,158,164,156,429,434,374,19,387,162,377,381,2,423,431,426,383,379,385
