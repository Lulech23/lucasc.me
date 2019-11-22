<!--t Windows 8.1 Gave Your Start Button Back? Now Get Rid of It! t-->
<!--tag 2013,archive,features,tech,thinkboxly tag-->
<!--image /content/images/windows-81-gave-your-start-button-back/startisgone1.png image-->
  
Unless you’re running a Surface RT, for which Windows 8.1 was pulled due to a bootup bug, chances are you’re either already running the hotly-anticipated update to Microsoft’s newest OS, or you’re getting ready to take the plunge. There’s a lot of great new features, and the operating system as a whole feels much more polished than the original release version of Windows 8. But at a particular point of controversy is a little icon which once again resides at the far left of the Windows taskbar. It was there from Windows 95 onward, then gone in Windows 8, and then it not-so-mysteriously reappeared in the 8.1 update. Many users rejoiced at the return of the start button, but others (myself included) found ourselves disappointed instead. Not disappointed at Microsoft–they’re just doing what they must to increase adoption of Windows 8–but disappointed at the general tech community that handled change so poorly that they voted back in a feature which was patently obsoleted a year ago.  
  

### Just How Many Start Buttons Do You Need?

  
Windows 8 already had a healthy supply of Start buttons. Move the mouse into the bottom left corner of the screen or either of the right corners and a Start button would fade or slide into existence. More than that, the average keyboard has had not one, but two dedicated Windows keys for the last decade and a half. The fifth Start button (re)introduced in Windows 8.1 is simply unnecessary. And after using the final build of Windows 8 for a year and the betas even before it, the Start button honestly feels like it’s in the way.  
  

### Enter StartIsGone

  
Technology is fast in general, but nothing is faster than hackers who want something changed–right now. Before Windows 8.1 was even out of beta, the creative minds at WinAero already had an elegant solution in place to right the wrong of the return of the Start Button. Its name? StartIsGone.  
  
[![](/content/images/windows-81-gave-your-start-button-back/startisgone1.png)](/content/images/windows-81-gave-your-start-button-back/startisgone1.png)  
  
StartIsGone consists of a simple DLL hook and an application to quietly run it so you don’t have to do any hacking, tweaking, or modifying yourself. The downside to this approach is that the application always has to be running, but it has a memory footprint just a tad under 1MB, which any computer capable of running Windows 8.1 can surely spare.  
  
To use it, simply download the program as provided free of charge at WinAero and open the file with your favorite .zip handler. Inside the compressed file will be two folders, one with a 32-bit (x86) and another with a 64-bit (x64) version of the software. If you aren’t sure which your computer needs, move the mouse to the bottom right corner of the screen and right click, then choose ‘System’. In the window that appears you’ll see a lot of basic information about your computer. About half way through this information is a “System type” indicator. Here you’ll see either “32-bit Operating System” or “64-bit Operating System”, and so you’ll know which version of StartIsGone to use. Extract the ‘x86′ or ‘x64′ folder from the StartIsGone .zip to somewhere it won’t get deleted–“C:Program Files” is a good place. It’s a good idea to rename the extracted folder “StartIsGone” so you don’t forget what’s in it. Double click the .exe to run the program, and away your Start button will go! Now you’ll find in your system tray (the right end of the taskbar) a square Windows icon. Right click on it and check the boxes “Run at startup” and “Hide Tray Icon”. That’s it! From now on your Windows 8.1 Start button will be hidden by StartIsGone and furthermore the program will start automatically and hide itself so you can forget it even exists.  
  
All the back-and-forth with the Start button may be a little bit on the crazy side, but at least the option is there for anyone to have their preference on the matter. Still, my personal hope is that Windows 8.1 will serve only to help users get used to working with the Start Screen so that come Windows 8.2 the button can be removed again–and for good this time. It’s time for a change, folks: embrace it.
