<!--t Launching Windows 8 Apps from the Desktop – Round 2 t-->
<!--tag 2014,archive,tech,thinkboxly,tutorials tag-->
<!--image /content/images/launching-windows-8-apps-from-desktop/8Store1-1024x440.png image-->
  
A while back [I wrote up a post](https://lucasc.me/post/windows-8-app-shortcuts-on-desktop) showing how it is possible to launch Modern Windows 8 Apps using a URL which can be shortcutted and even pinned to the taskbar with a little extra work. That post has since been updated numerous times as readers have encountered shortcomings of the method or found ways to circumvent them, and at the end of the day Windows 8.1 Update 1 just built in the shortcut functionality, rendering all that work almost obsolete.  
  
Almost.  
  
While Update 1 introduced native shortcutting to the taskbar, there are still times you might want to launch an app from elsewhere, and many apps lack an IE-compatible URL to be launched from. Today we are going to address these problems once and for all. The result is definitely more hack than solution, but it works—and from anywhere, for any app on your PC. Let’s get started.  
  
  

### Visual Basic Script

  
Whether you know it or not, your Windows PC is equipped with VBScript, a scripting language modeled after Visual Basic and designed to act upon Windows itself. Without going into too much detail, you can think of it like a more capable version of cmd.exe (for the purposes of this post). It’s fairly common to see VBScript used in business environments with custom software, but as it turns out it can be pretty useful for automating tasks on the home computer as well.  
Of course, there’s no plain and simple “vbscript.exe” for you to run and experiment with, which is why you may or may not even be aware of its existence. Ever since Windows 98 VBScript has been built right into Windows. All you need to do is make some code for it to munch through, and Windows will take care of the rest.  
  

### Making the Script

  
VBScript files are stored in plain text documents with the extension “.vbs”. So to make a new VBScript, simply open your favorite text editor and save the blank document as “yourfile.vbs”. Make sure the “All Files” option is selected, so your document doesn’t get appended to “yourfile.vbs.txt” or whathaveyou. If everything worked as it should, the file icon will change to this: ![](/content/images/launching-windows-8-apps-from-desktop/VBSccript_file_format_icon1.png)  
  
Next we can start adding content so our script will actually do something when we run it. Since this post is about running Windows 8 Modern apps we won’t go over all the technical details behind each line, but instead what the end result is. As I said, it’s something of a hack. You’ve been warned. Here’s an example code to slap into your VBScript file.  
  
Set objShell = WScript.CreateObject(“WScript.Shell”)  
objShell.SendKeys “^{ESC}”  
WScript.Sleep 100  
objShell.SendKeys “Hulu Plus”  
WScript.Sleep 100  
objShell.SendKeys “{ENTER}”  
Set objShell = Nothing  
  
So here’s the quick and dirty of what’s going on here. The first and last lines open and close the script. The second line simulates a key press of Ctrl + Esc, which duplicates the functionality of a Start button (which VBScript does not directly support, oddly enough). After that the script pauses for 100 milliseconds to give the PC a brief period of time to do its work. Then it goes on to type the words “Hulu Plus”, pause 100 milliseconds again, and hit the Enter key. The end result? The start menu is opened, a search is run for Hulu Plus, the Hulu Plus Modern App is the top result, and Enter opens that top result. It’s the same exact process you would likely run through yourself, only with VBScript it becomes automatic. Fortunately this also means the process of making new scripts is fairly straightforward whether you are familiar with VBScript or not. Just change “Hulu Plus” to the name of the app you want to launch, and you’re good to go. If you find your PC can’t quite keep up, just change the two instances of 100 above to 200 or 300, etc. until the pause is long enough for each step to complete before the next begins.  
  
[![](/content/images/launching-windows-8-apps-from-desktop/VBScript_AppLauncher1.png)](/content/images/launching-windows-8-apps-from-desktop/VBScript_AppLauncher1.png)  
  
When you’re done, save your .vbs file and simply run it like you would any program. Create a shortcut for it and change the icon to something more representative of the app you’re launching, if you wish. Add it to your Steam library, or a launcher in XBMC. It will go anywhere and launch anything. Maybe not in the cleanest way, but creative solutions are always better than nothing!
