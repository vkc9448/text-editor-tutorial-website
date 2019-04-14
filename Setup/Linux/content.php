<?php
	$content = array(
		"Getting Started" => "<p>To get started with Atom, we'll need to get it on your system. This section will go over installing Atom on your system as well as the basics of how to build it from source.</p>
													<p>Installing Atom should be fairly simple. Generally, you can go to <a href='https://atom.io'>https://atom.io</a> and at the top of the page you should see a download button as shown here:</p>
													<div class='innertube'>
														<img class='content-image' src= '" . URL_IMG . "windows-downloads.png' alt='Homepage of atom.io'/>
														</div>
													<p>The button or buttons should be specific to your platform and the download package should be easily installable. However, let's go over them here in a bit of detail.</p>",

		"Installing Atom on Linux" => "<p>Installing Atom on Linux <a href='https://atom.io/download/deb'>Debian Package</a> or <a href='https://atom.io/download/rpm'>RPM package</a> either from the <a href='https://atom.io/'>main Atom website</a> or from the <a href='https://github.com/atom/atom/releases/latest'>Atom project releases page</a>. These packages do not currently have auto-update features, so when you would like to upgrade to a new release of Atom, you will have to repeat this installation process.</p>
																		 <h4 class='linux-setup-h4'>Debian and Ubuntu (deb/apt)</h4>
																		 <p>To install Atom Debian, Ubuntu, or related systems:</p>
																		 <div class='code'>
																		 	<p># Install Atom<br/>sudo dpkg -i atom-amd.64.deb<br/># Install Atom's dependencies if they are missing<br/>sudo apt-get -f install</p>
																		 </div>

																		 <h4 class='linux-setup-h4'>Redhat and CentOS (yum)</h4>
																		 <p>To install Atom on CentOS, Oracle Linux, RedHat Enterprise Linux, Scientific Linux or related systems that use the yum package manager:</p>
																		 <div class='code'>
																		 	<p>sudo yum install -y atom.x86_64.rpm</p>
																		 </div>

																		 <h4 class='linux-setup-h4'>Fedora (dnf)</h4>
																		 <p>To install the latest release of Atom on Fedora or other systems that use the DNF package manager:</p>
																		 <div class='code'>
																		 	<p>sudo dnf install -y atom.x86_64.rpm</p>
																		 </div>

																		 <h4 class='linux-setup-h4'>SUSE (yzpp)</h4>
																		 <p>To install the latest release of Atom on openSUSE or other systems that use the Zypp package manager:</p>
																		 <div class='code'>
																		 	<p>sudo zypper in -y atom.x86_64.rpm</p>
																		 </div>
																		 ",

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
