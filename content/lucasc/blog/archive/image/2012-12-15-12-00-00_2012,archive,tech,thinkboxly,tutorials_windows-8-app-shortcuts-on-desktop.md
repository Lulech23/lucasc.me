<!--t Windows 8 App Shortcuts on Desktop Tutorial t-->
<!--tag 2012,archive,tech,thinkboxly,tutorials tag-->
<!--image /content/images/windows-8-app-shortcuts-on-desktop/Windows-8-header1-1024x576.jpg image-->
  
There’s no doubt about it in my mind: Windows 8’s new UI is pretty slick. However, as it only replaces the Start Menu of last generation (ok, the last _several_ generations), it is still very much necessary to pay the familiar Windows desktop a visit on a daily basis. Now, while it may not be difficult to hit the Windows key on your keyboard, type the name of the app you want, and hit Enter, some might still prefer to have shortcuts on their Desktop or Taskbar leading to Metro/Modern UI Windows 8 apps. Although Microsoft has not made it abundantly clear how to achieve such a feat, it is nonetheless possible…although more complicated than you might think, too. But never fear, ThinkBoxly is here! Once you’ve gone through the process once or twice, you’ll be making shortcuts on your own in no time.  
  
IMPORTANT NOTICE: AS PART OF WINDOWS 8.1 UPDATE 1 MICROSOFT IS INCLUDING BUILT-IN APP SHORTCUT FUNCTIONALITY. THIS TUTORIAL WILL NO LONGER BE NECESSARY AFTER APRIL 8, 2014. 
  

### Step 1: Identifying the App

  
Windows 8 apps are not quite as simple as traditional Windows applications. In the past, you could simply find an executable file, right click, make a shortcut. Well, there’s no executable as such in this case…so first of all what you need to do is find what exactly the shortcut ought to point to.  
  
The simple and slightly odd answer is: a URL. Yes, you’ll be using one of the same things you used to visit this webpage to launch a Windows 8 app! But this isn’t to say you’ll be typing “www.fruitninja.com” into your shortcut. No, you need a local URL, which looks a bit different than a remote URL that will connect to a server.  
  
But of course, knowing the syntax won’t help us unless we know what to plug in there, so let’s find that first. Hit Win + R on your keyboard, or search for “Run” in your Start Screen. In the Run prompt, type ‘regedit’ (without the quotes). Like so:  
  
[![](/content/images/windows-8-app-shortcuts-on-desktop/W8S_011.png)](/content/images/windows-8-app-shortcuts-on-desktop/W8S_011.png)  
Now you’ll be in the Windows Registry, which can be a dangerous thing to mess with if you don’t know what you’re doing. However, you won’t need to make any changes, so just don’t modify anything and you’ll be safe. Expand the folders in Regedit to navigate to “HKEY\_CURRENT\_USER/Software/Classes/Extensions/ContractID/Windows.Protocol/PackageID”. Here you will find most of your installed Metro apps. If you don’t see your target app here, try taking a look a few folders up in just ‘Classes’. It’s a lot of stuff to sort through, but your app will be in one of these two locations. Mostly you’ll just need to look in ‘PackageID’.  
  
When you’ve located the app of your choice, expand its folders to “…/ActivatableClassId/App.whatevernonsense/CustomProperties/”. Here you will finally find the targeted bit of info. A string in Regedit called ‘Name’ will provide you with the internal name of your app, which, you guessed it, will be the URL you’ll use to launch it. Double click on the ‘Name’ key and hit Ctrl + C to copy the name exactly. DO NOT CHANGE THE NAME, ONLY COPY IT. By this point you should have something like this (click the image for a larger view):  
  
[![](/content/images/windows-8-app-shortcuts-on-desktop/W8S_021.png)](/content/images/windows-8-app-shortcuts-on-desktop/W8S_021.png)  
  
Ok, with the name copied, you’re ready to close Regedit (it will save your place, if you need to come back later) move on to Step 2. 
  

### Step 2: Creating the Basic Shortcut

  
If you plan on having more than one shortcut for Metro/Modern apps, I recommend you make a folder for them somewhere on your computer. It may seem odd, making a folder of shortcuts, but essentially we’ll end up making shortcuts of these shortcuts, so just trust me on this. Once you’ve made your folder, right click in a blank spot, choose ‘New’, ‘Shortcut’. In the ‘location’ field, you’ll need to put the name of the app as found in Step 1 plus “://” at the end. So, “microsoftmusic” becomes “microsoftmusic://”, “bingweather” becomes “bingweather://” and so on. In my case, I wanted a shortcut to Fruit Ninja, so my shortcut was “xboxliveapp-1496516561://”.  
  
[![](/content/images/windows-8-app-shortcuts-on-desktop/W8S_031.png)](/content/images/windows-8-app-shortcuts-on-desktop/W8S_031.png)  
Give the shortcut a name, and then save it. Try running the shortcut now; if everything was done correctly, it should launch your app. If all you want is to have a shortcut on your desktop, then this is just fine–give the shortcut an icon and you’re done. However, right now Windows recognizes the shortcut as an Internet Shortcut because of the URL, and as such, you can’t pin the shortcut to your Taskbar, Favorites menu, or pretty much anything else. If you fancy having a shortcut that works like a program and can be placed wherever you like, check out Step 3. 
  

### Step 3: Creating the Advanced Shortcut

  
In order to adapt our Internet Shortcut to a normal Shortcut, we’ll have to make a shortcut of it (no, I’m not kidding)! But, this can’t be any old shortcut. Should you try the right-click, ‘Create Shortcut’ trick, you’ll end up with another Internet Shortcut with the same limitations as the first. Instead, hold Shift, right click on the Internet Shortcut, and choose ‘Copy as Path’.  
  
[![](/content/images/windows-8-app-shortcuts-on-desktop/W8S_041.png)](/content/images/windows-8-app-shortcuts-on-desktop/W8S_041.png)  
Now right click on a blank area and make a brand new shortcut again. Only this time, rather than enter the URL directly to your app, you’ll paste the path you copied, preceded by “explorer.exe” (again, without the quotes). The final path should look like this:  
  
[![](/content/images/windows-8-app-shortcuts-on-desktop/W8S_051.png)](/content/images/windows-8-app-shortcuts-on-desktop/W8S_051.png)  
You’ll notice that the new shortcut has the Windows Libraries icon, which obviously isn’t ideal, so slap on the same icon you made before, or if you didn’t bother to make one yet, use [GIMP](http://gimp.org/) to convert the Metro icon from PNG to ICO, or look for something usable on [IconArchive](http://www.iconarchive.com/) (make sure you download in the ICO format). Then it’s just a matter of right-clicking the shortcut, choosing ‘Properties’, ‘Change Icon’, and browsing to your downloaded icon of choice.  
  
Ok! Now you have a shortcut that can be pinned on the Taskbar, Favorites menu, or even the Start Screen, although that would be pointless aside from just being for geeky laughs. Here’s my resulting shortcut sitting happily along Desktop applications on my Taskbar:  
  
[![](/content/images/windows-8-app-shortcuts-on-desktop/W8S_061.png)](/content/images/windows-8-app-shortcuts-on-desktop/W8S_061.png)  
  
Want to make more shortcuts? Here’s a list of basic Metro/Modern apps to get you started (thanks to [ItsJustWhatever](http://www.itsjustwhatever.com/) for the original list; I’ve added a few myself). Happy linking, and stay tuned for more Windows 8 tweaks and tips!  
  

### Popular App URLs

  
(NOTE: Any of these URLs can be entered in a Run prompt without making a shortcut–good for testing)  
  
bingnews://  
bingfinance://  
bingweather://  
bingtravel://  
bingsearch://  
bingsports://  
bingmaps://  
xboxgames://  
wlcalendar://  
wlpeople://  
netflix://  
onenote://  
mailto://  
mschat://  
microsoftvideo://  
microsoftmusic://  
ebay://  
ms-windows-store://  
skype://  
kindle://  
xboxliveapp-1496516561:// \[Fruit Ninja\]xboxliveapp-1515264857:// \[Cut the Rope\]xboxliveapp-1297290225:// \[Microsoft Mahjongg\]xboxliveapp-1297290226:// \[Microsoft Minesweeper\]xboxliveapp-1297290209:// \[Pinball FX2\]xboxliveapp-1496516562:// \[Jetpack Joyride\]  
xboxliveapp-1297290211:// \[Hydro Thunder Hurricane (Trial, may not work with full app)\]xboxliveapp-1297290212:// \[Ilomilo+ (Trial, may not work with full app)\]  
  
**Update:** Using the latest version of IE, some users may experience issues running apps through shortcuts this way. A warning message will appear, asking “Do you want to allow this website to open an app on your computer?” and clicking ‘allow’ will not necessarily open the app at all. To fix this problem, open IE on the desktop, click the gear icon in the top right, and choose ‘Internet Options’. From there switch to the ‘Programs’ tab and set ‘Choose how you open links’ to ‘Always in Internet Explorer’ (not ‘Always in Internet Explorer on the desktop’). Be warned, however, that this will set all desktop links to open in the Metro version of IE, so you’ll need to hit the wrench icon to the right of the address bar and choose ‘View in the desktop’ if Metro IE isn’t your thing.  
  
**Update 2:** It turns out there’s also an alternative way to discover URLs besides digging through the Windows registry, which makes app discovery rather cumbersome. Access the Control Panel on your Windows 8 desktop, and make sure your view is set to either ‘Large icons’ or ‘small icons’. From there choose ‘Default Programs’, ‘Associate a file type or protocol with a program’. Windows will then take a moment to load all installed applications, including those in the Metro UI. These will be grouped together at the bottom of the list under the ‘Protocols’ section. Check the ‘description’ field for the URL, and copy it down without the ‘URL:’ at the beginning and with the ‘://’ at the end, as shown in this tutorial. Note that some Metro apps mysteriously do not appear in the registry or in this section–if a way to launch these apps is discovered, it will be posted here in another update.  
**  
Update 3:** It also turns out IE isn’t necessary for launching apps at all–Windows Explorer can do the same trick. Point your shortcuts to “C:Windowsexplorer.exe \[url\]://” (no quotes) and there will be no need for redundant shortcutting or issues with IE. Thanks Tom for finding this one out!
