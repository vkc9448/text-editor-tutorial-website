<?php
	$content = array(
		"Atom Basics" => "
        <p>Now that Atom is installed on your system, let's fire it up, configure it and get acquainted with the editor.
When you launch Atom for the first time, you should get a screen that looks like this:
</p>
<div class='innertube'>
<img class='content-image' src= '" . URL_IMG . "first-launch.png' alt='Default look of atom.io'/>
</div>
<p>This is the Atom welcome screen and gives you a pretty good starting point for how to get started with the editor.
</p>
<h5>Terminology</h5>
<p>You can find definitions for all of the various terms that we use throughout the manual in our<a href='http://flight-manual.atom.io/resources/sections/glossary/'> Glossary</a>. </p>

													",

"Command Palette" => "
<p>In that welcome screen, we are introduced to probably the most important command in Atom, the Command Palette. If you press <code>Cmd+Shift+P</code> while focused in an editor pane, the command palette will pop up.</p> 
<div class='innertube'>
<img class='content-image' src= '" . URL_IMG . "command-palette.png' alt='search-driven menu'/>
</div>
<p>Not only can you see and quickly search through thousands of possible commands, but you can also see if there is a keybinding associated with it. This is great because it means you can guess your way to doing interesting things while also learning the shortcut key strokes for doing it.

For the rest of the book, we will try to be clear as to the text you can search for in the Command Palette in addition to the keybinding for different commands. </p>

",
"Settings and Preferences" => "
<p>Atom has a number of settings and preferences you can modify in the Settings View.</p> 
<div class='innertube'>
<img class='content-image' src= '" . URL_IMG . "settings.png' alt='Settings View.'/>
</div>
<p>This includes things like changing the theme, specifying how to handle wrapping, font settings, tab size, scroll speed and much more. You can also use this screen to install new packages and themes, which we'll cover in Atom Packages.</p>

<p>To open the Settings View, you can:</p>

<ul>
  <li>Use the Atom > Preferences menu item in the menu bar</li>
  <li>Search for settings-view:open in the Command Palette</li>
  <li>Use the <code>Cmd+</code>, keybinding</li>
</ul>



",
        
"Changing the Theme" => "
<p>The Settings View also lets you change the themes for Atom. Atom ships with 4 different UI themes, dark and light variants of the Atom and One theme, as well as 8 different syntax themes. You can modify the active theme or install new themes by clicking on the Themes tab in the sidebar of the Settings View.</p> 
<div class='innertube'>
<img class='content-image' src= '" . URL_IMG . "theme.png' alt='Settings View.'/>
</div>
<p>This includes things like changing the theme, specifying how to handle wrapping, font settings, tab size, scroll speed and much more. You can also use this screen to install new packages and themes, which we'll cover in <a href='http://flight-manual.atom.io/using-atom/sections/atom-packages/'> Atom Packages.</a></p>

<p>To open the Settings View, you can:</p>

<ul>
  <li>Use the Atom > Preferences menu item in the menu bar</li>
  <li>Search for settings-view:open in the Command Palette</li>
  <li>Use the <code>Cmd+</code>, keybinding</li>
</ul>

<p>The UI themes control the style of UI elements like the tabs and the tree view, while the syntax themes control the syntax highlighting of text you load into the editor. To change the syntax or UI theme, simply pick something different in the appropriate dropdown list.

There are also dozens of themes on https://atom.io that you can choose from if you want something different. We will cover customizing a theme in <a href='http://flight-manual.atom.io/using-atom/sections/basic-customization/'> Style Tweaks</a> and creating your own theme in <a href='http://flight-manual.atom.io/hacking-atom/sections/creating-a-theme/'> Creating a Theme. </a></p>



",

"Soft Wrap" => "
<p>You can use the Settings View to specify your whitespace and wrapping preferences.</p> 
<div class='innertube'>
<img class='content-image' src= '" . URL_IMG . "settings-wrap.png' alt='Settings View.'/>
</div>
<p>Enabling Soft Tabs will insert spaces instead of actual tab characters when you press the Tab key and the Tab Length setting specifies how many spaces to insert when you do so, or how many spaces are used to represent a tab if Soft Tabs is disabled.
<br></br>
The Soft Wrap option will wrap lines that are too long to fit in your current window. If soft wrapping is disabled, the lines will simply run off the side of the screen and you will have to scroll the window to see the rest of the content. If Soft Wrap At Preferred Line Length is toggled, the lines will wrap at 80 characters instead of the end of the screen. You can also change the default line length to a value other than 80 on this screen.
<br></br>
In Basic Customization we will see how to set different wrap preferences for different types of files (for example, if you want to wrap Markdown files but not other files).

</p>",
        
"Opening, Modifying, and Saving Files" => "
<p>Now that your editor is looking and acting how you want, let's start opening up and editing files. This is a text editor after all, right?</p> 
<h5>Opening a File</h5>
<p>There are several ways to open a file in Atom. You can do it by choosing File > Open from the menu bar or by pressing <code>Cmd+O</code> to choose a file from the standard dialog.</p>
<div class='innertube'>
<img class='content-image' src= '" . URL_IMG . "open-file.png' alt='Settings View.'/>
</div>
<p>This is useful for opening a file that is not contained in the project you're currently in (more on that next), or if you're starting from a new window for some reason.
<br></br>
Another way to open a file in Atom is from the command line using the atom command. The Atom menu bar has a command named Install Shell Commands which installs the atom and apm commands if <a href='http://flight-manual.atom.io/getting-started/sections/installing-atom/#installing-atom-on-mac'> Atom wasn't able to install them itself.</a>
You can run the atom command with one or more file paths to open up those files in Atom.
<br></br>

<code>
atom --help
Atom Editor v1.8.0
Usage: atom [options] [path ...]
One or more paths to files or folders may be specified. If there is an
existing Atom window that contains all of the given folders, the paths
will be opened in that window. Otherwise, they will be opened in a new
window.
...
</code>
</p>
<p>This is a great tool if you're used to the terminal or you work from the terminal a lot. Just fire off atom [files] and you're ready to start editing.</p>

<h5>Editing and Saving a File</h5>
<p>Editing a file is pretty straightforward. You can click around and scroll with your mouse and type to change the content. There is no special editing mode or key commands. If you prefer editors with modes or more complex key commands, you should take a look at the Atom package list. There are a lot of packages that emulate popular styles.
<br></br>
To save a file you can choose File > Save from the menu bar or Cmd+S to save the file. If you choose File > Save As or press Cmd+Shift+S then you can save the current content in your editor under a different file name. Finally, you can choose File > Save All or press Alt+Cmd+S to save all the open files in Atom.</p>

",
        
"Opening Directories" => "
<p>Atom doesn't just work with single files though; you will most likely spend most of your time working on projects with multiple files. To open a directory, choose the menu item File > Open and select a directory from the dialog. You can also add more than one directory to your current Atom window, by choosing File > Add Project Folder from the menu bar or pressing <code>Cmd+Shift+O.</code></p>
<p>You can open any number of directories from the command line by passing their paths to the <code>atom</code> command line tool. For example, you could run the command atom <code>./hopes ./dreams</code> to open both the <code>hopes</code> and the <code>dreams</code> directories at the same time.
<br></br>
When you open Atom with one or more directories, you will automatically get a Tree View on the side of your window.</p>
<div class='innertube'>
<img class='content-image' src= '" . URL_IMG . "project-view.png' alt='Tree View'/>
</div>
<p>The Tree View allows you to explore and modify the file and directory structure of your project. You can open, rename, delete and create new files from this view.
<br></br>
You can also hide and show it with Cmd+\ or the <code>tree-view:toggle</code> command from the Command Palette, and Ctrl+0 will focus it. When the Tree view has focus you can press A, M, or Delete to add, move or delete files and folders. You can also right-click on a file or folder in the Tree view to see many of the various options, including all of these plus showing the file in Finder or copying the file path to the clipboard.

</p>",
        
"Opening a File in a Project" => "
<p>Once you have a project open in Atom, you can easily find and open any file within that project.</p>

<div class='innertube'>
<img class='content-image' src= '" . URL_IMG . "finder.png' alt='Tree View'/>
</div>
<p>You can also search through only the files currently opened (rather than every file in your project) with Cmd+B. This searches through your buffers or open files. You can also limit this fuzzy search with Cmd+Shift+B, which searches only through the files which are new or have been modified since your last Git commit.
<br></br>
The fuzzy finder uses the core.ignoredNames, fuzzy-finder.ignoredNames and core.excludeVCSIgnoredPaths configuration settings to filter out files and folders that will not be shown. If you have a project with tons of files you don't want it to search through, you can add patterns or paths to either of these config settings or your standard .gitignore files. Well learn more about config settings in Global Configuration Settings, but for now you can easily set these in the Settings View under Core Settings.
<br></br>
Both core.ignoredNames and fuzzy-finder.ignoredNames are interpreted as glob patterns as implemented by the minimatch Node module.</p>
  ",
        
	)
?>
