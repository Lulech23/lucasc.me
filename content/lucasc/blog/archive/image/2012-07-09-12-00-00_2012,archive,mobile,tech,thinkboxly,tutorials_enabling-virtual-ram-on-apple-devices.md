<!--t Enabling Virtual RAM on Apple Devices Tutorial t-->
<!--tag 2012,archive,mobile,tech,thinkboxly,tutorials tag-->
<!--image /content/images/enabling-virtual-ram-on-apple-devices/Apple-iPhone-6-RAM1-1024x622.jpg image-->
  
Aside from the artificial limitations placed upon the iOS software by Apple, my biggest frustration with all iPods, iPhones, and iPads has been that they’ve born the very frustrating physical limitation of far too little RAM to comfortably run a good deal of intensive apps, or alternatively to run a healthy selection of simpler apps simultaneously. Although jailbreaking can solve the majority of software woes, in the process it only contributes to this hardware problem by adding more processes for iOS to handle in the background in order to run all of the essential tweaks.  
  
Thankfully, while there is no true solution to this issue aside from Apple finally waking up and adding sufficient RAM to complement their OS, there is something of a workaround for jailbroken iDevice users that can significantly increase stability in situations where a lack of RAM might result in heavy lagging or an outright app crash. Better yet, the solution is free, and you probably won’t even need to install any additional software!  
  

## Premise

  
If you’ve worked much with Windows or Linux, chances are you’ll be familiar with the terms ‘page file’ and ‘swap space’. These two terms refer essentially to just two methods of doing the same thing: that is, to allow the hard drive to temporarily compensate for space that the RAM lacks, but needs in order to keep programs up and running.  
  
Not surprisingly, considering iOS is basically just a heavily modified version of Apple’s desktop operating system, OSX, it turns out that a system like these can actually be enabled in iOS, allowing you to use up to 64MB of hard disk storage space to assist the RAM as needed.  
  
Now before I continue, I would like to note that some people might express concern over writing and deleting files so frequently, but despite the fact that there is some truth to their fear that enabling swap space/page filing on iOS will wear out the hard drive, the simple fact is, we’re talking a life reduction of weeks or months, not years. Seeing as very few of you out there would wait for the true and final death of your iDevice before upgrading anyway, this should be treated as a non-issue. Nevertheless, if you are scared to try this, you may of course refrain at your own discretion.  
  

## Prerequisites

  
As I said before, chances are good that you already have all the software you need for this and won’t need anything else, but if you do happen to be lacking one or more of the following, make sure to check these boxes off the list before attempting to go any further.  
  

- iPod, iPhone, or iPad running any relatively recent version of iOS
- You must have a jailbroken device for this tweak
- iFile for iOS ($2 in Cydia), OR [iFunBox](http://www.i-funbox.com/) and a text editor of your choice on a PC/Mac (Free!)
- 10 minutes or so

  

## Process

  
Setting up this tweak is fairly simple. I will generally assume you’re using iFile in this tutorial, but will make notes for the iFunBox method along the way.  
  
**1.** Open up iFile (or iFunBox > Your iDevice > Raw Files System) and navigate to “/System/Library/LaunchDaemons/”  
  
**2.** Tap the ‘Edit’ button in the top right corner of iFile, and then the ‘+’ icon at the bottom left corner to create a new file (or open your text editor to a blank new file).  
  
**3a.** In the new file creation screen, set “Name” to “com.apple.dynamic\_pager.plist” without the quotes. This is case and name sensitive–make sure you get every letter correct for iOS to pick up on the file! (or save your blank file as “com.apple.dynamic\_pager.plist” anywhere on your hard drive. Make sure it really ends in “.plist”, not “.plist.txt”!)  
  
**3b.** Set “Type” to “Regular File” (we’ll cover the rest of step 3 for iFunbox later)  
  
**3c.** Set “Owner” to “root”  
  
**3d.** Set “Group” to “wheel”. Leave access permissions as they are. Now hit “Create”.  
  
**3e.** Tap “Done” to exit edit mode in iFile, then find the file you just created, tap on it, and choose to open with iFile’s built-in text viewer. As the file is blank, iFile will throw an error message, but you can just ignore it for now. With that error message gone, hit ‘Edit’ in the top right corner of the text viewer, and then proceed to step 4 (…where iFunBox people will get to join back in!)  
  
**4.** Copy the following code on your iDevice and paste it into your iFile text editor (or copy it and paste into your blank file on your computer):  
  
<?xml version=”1.0″ encoding=”UTF-8″?>  
<!DOCTYPE plist PUBLIC “-//Apple//DTD PLIST 1.0//EN” “http://www.apple.com/DTDs/PropertyList-1.0.dtd”>  
<plist version=”1.0″>  
<dict>  
<key>KeepAlive</key>  
<true/>  
<key>Label</key>  
<string>com.apple.dynamic\_pager</string>  
<key>ProgramArguments</key>  
<array>  
<string>/sbin/dynamic\_pager</string>  
</array>  
<key>RunAtLoad</key>  
<true/>  
</dict>  
</plist>  
  
  
It is worth mentioning that mobile Safari has a glitch here that will remove “...encoding=”UTF-8″?>” from the copied text, thus breaking your file. Double check that this part of the code is present in the iFile editor before continuing, and if it is not, add it in exactly as shown in the code above. (This problem should not be present for iFunBox users)  
  
Once you’ve verified the code is entered properly, you may save and close the file. (…or save and close the file and then drag it into your iFunBox window to copy the file to its proper location. Then right click on your new file, choose “Permissions”, and set “Owner” and “Group” according to step 3. Save your changes and then proceed to step 5)  
  
5\. Ok, so we’re half way done. Just one more file to create! Next you’ll need to head over to “/private/var/preferences/” and create another file with the same Owner and Group as before, only be sure to name this one “com.apple.virtualMemory.plist”, again remembering not to enter quotes, being case sensitive, and careful not to make typos.  
  
6\. Enter edit mode for this text file as well, and paste the following into it, again being careful to make sure that every part of the code successfully copies over:  
  
  
<?xml version=”1.0″ encoding=”UTF-8″?>  
<!DOCTYPE plist PUBLIC “-//Apple//DTD PLIST 1.0//EN” “http://www.apple.com/DTDs/PropertyList-1.0.dtd”>  
<plist version=”1.0″>  
<dict>  
<key>UseEncryptedSwap</key>  
<false/>  
</dict>  
</plist>  
  
  
Save and close the file (or save, close, and copy the file to the proper location in iFunBox, and then adjust its owner and group from the “Permissions” menu once again)  
  
7\. Reboot your iDevice for the changes to be applied.  
  
8\. In iFile or iFunBox navigate to “/private/var/vm/” and check to make sure that a file named “swapfile0″ is there and that it occupies 64MB of space. If so, you’re done, and the tweaks were applied successfully. If not, check your text files for errors, correct any you find, and reboot again.  
  

## Profit!

  
Ok! Now the real fun starts! From here on out, whenever your iDevice finds that it is running low on RAM, it will call swapfile0 into action, thus giving you a 64MB boost of virtual RAM space! For more fun, enable the SBSettings tweak for displaying your RAM on the status bar beside the clock. Now watch as you use your programs–while previously your iDevice would probably struggle to keep more than 100MB of RAM free and typically have more like 75MB free, now you can routinely have over 150MB of available RAM space!  
  
Of course, a good deal of it is somewhat of a trick; while the solid state drives in Apple’s devices are fast, they still cannot compete with the speed of real RAM. However, the additional elbow room will still make your apps run smoother and stabler.  
  
Enjoy!  
  
**CANDID UPDATE:** After using this tweak (very heavily) for a few days, I will say that I’ve noticed a considerable hit to my battery life (not surprising considering the thing is writing to the hard drive more frequently). It’s still more than enough to get me through a day, but if losing an hour of your battery life is a problem for you, you might want to use this tweak sparingly. This is probably why Apple hasn’t enabled the tweak by default…which is pretty lame, if you ask me. Give users an unstable device so you can gain the impression of a better battery than you’ve really got. Nice.  
  
I will also add this though: you _can_ have the tweak enabled and not affect battery life by any significant amount. Just be careful not to open too many more apps than normal and clear out your opened apps frequently so that the swap space won’t even get touched except in emergency situations. It’s the frequent disk writes that drain power, so simply enabling the tweak won’t harm a thing; it’s just a matter of how much you make use of it.
