<?php
	$content = array(
		"Getting Started" => "<p>To get started with Atom, we'll need to get it on your system. This section will go over installing Atom on your system as well as the basics of how to build it from source.</p>
													<p>Installing Atom should be fairly simple. Generally, you can go to <a href='https://atom.io'>https://atom.io</a> and at the top of the page you should see a download button as shown here:</p>
													<div class='innertube'>
														<img class='content-image' src= '" . URL_IMG . "windows-downloads.png' alt='Homepage of atom.io'/>
														</div>
													<p>The button or buttons should be specific to your platform and the download package should be easily installable. However, let's go over them here in a bit of detail.</p>",

		"Installing Atom on Mac" => "<p>Atom follows the standard Mac zip installation process. You can either press the download button from the <a href='https://atom.io'>https://atom.io</a> site or you can go to the <a href='https://atom.io>https://atom.io</a> site or you can go to the <a href='https://github.com/atom/atom/releases/tag/v1.22.1'>Atom releases page</a> to download the <code>atom-mac.zip</code> file explicitly. Once you have that file, you can click on it to extract the application and then drag the new <code>Atom</code> application into your 'Applications' folder.</p>
																		 <p>When you first open Atom, it will try to install the <code>atom</code> and <code>apm</code> commands for use in the terminal. In some cases, Atom might not be able to install these commands because it needs an administrator password. To check if Atom was able to install the <code>atom</code> command, for example, open a terminal window and type <code>which atom</code>. If the <code>atom</code> command has been installed, you'll see something like this:</p>

																		 <div class='code'>
																		 	<p>which atom <br/>/usr/local/bin/atom<br/>$<br/></p>
																		 </div>
																		 <p style='margin-top: 1rem;'>If the <code>atom</code> command wasn't installed, the <code>which</code> command won't return anything:</p>
																		 <div class='code'>
																		 	<p>which atom<br/>$</p>
																		 </div>
																		 <p style='margin-top: 1rem;'>To install the <code>atom</code> and <code>apm</code> commands, run 'Window: Install Shell Commands' from the <a href='http://flight-manual.atom.io/getting-started/sections/atom-basics/#command-palette'>Command Palette</a>, which will prompt you for an administrator password</p>",

		"Portable Mode" => "<p>Atom stores configuration and state in a <code>.atom</code> directory usually located in your home directory (<code>%userprofile%</code> on Windows). You can however run Atom in portable mode where both the app and the configuration are stored together such as on a removable storage device.</p>
												<p>To setup Atom in portable mode download the <a href='https://github.com/atom/atom/releases/latest'>zip/tpackage for your system</a> and 																extract it to your removable storage.</p>
												<p>Then create a <code>.atom</code> directory alongside the directory that contains atom.exe, for example:</p>
												<div class='code'>e:\atom-1.14\atom.exe<br/>e:\.atom</div>",

		"Portable Notes" => "<ul>
												 <li>The <code>.atom</code> directory must be writeable</li>
												 <li>You can move an existing <code>.atom</code> directory to your portable device</li>
												 <li>Atom can also store its Electron user data in your <code>.atom</code> directory - just create a subdirectory called <code>electronUserData</code> 									 inside <code>.atom</code></li>
												 <li>Alternatively you can set the <code>ATOM_HOME</code> environment variable to point wherever you want (you can write a .sh or .cmd script to 									 temporarily set it and launch it from that)</li>
												 <li>Portable mode installations will not automatically update</li>
												 </ul>",

		"Building Atom from Source" => "<p>If you just want to build Atom from source, you can also do that. The Atom GitHub repository has detailed <a href='https://github.com/atom/atom/tree/master/docs/build-instructions'>build instructions for Mac, Windows, Linux, and FreeBSD</a>.</p>",

		"Behind a Firewall" => "<p>If you are behind a firewall and seeing SSL errors when installing packages you can disable strict SSL by running:</p>
														<div class='code'>C:\> apm config set strict-ssl false</div>",

		"Using a Proxy?" => "<p>If you are using a HTTP(S) proxy you can configure <code>apm</code> to use it by running:</p>
												 <div class='code'>C:\> apm config set https-proxy <strong>YOUR_PROXY_ADDRESS</strong></div>
												 <p>You can run <code>apm config get https-proxy</code> to verify it has been set correctly.</p>",
	)
?>
