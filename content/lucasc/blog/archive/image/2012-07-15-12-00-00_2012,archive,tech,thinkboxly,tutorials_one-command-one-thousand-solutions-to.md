<!--t One Command, One Thousand Solutions to PC Problems t-->
<!--tag 2012,archive,tech,thinkboxly,tutorials tag-->
<!--image /content/images/one-command-one-thousand-solutions-to/sfc_02_sfc_in_progress1.png image-->
  
Here’s a little tip every Windows user should know about.  
  
Maybe you got a virus, maybe the power went out during an update, maybe you were tampering with your system, or maybe space aliens are to blame–at any rate, things go bad, and then things go really, really bad.  
  
If you find yourself with a Windows installation suffering from corrupted or missing system files, you may be surprised to find out that one of your best shots at making repairs is not found in a pricey piece of do-it-all software. In fact, as long as you’re running Windows XP or newer, all it takes to fix a good deal of these issues is a single command.  
  
SFC (that’s System File Checker) is a nifty little command-line utility built right into all recent (and even not so recent) versions of Windows. As its name implies, the program will check system files for problems, and if it finds any, it will attempt to make repairs. The program’s success rate is surprisingly high for being so relatively unknown and easy to operate, and even if it doesn’t correct all of your issues in a single pass, SFC is known to incrementally work on repairs, building repairs upon repairs, until your system is fully operational again, so don’t give up on it until you’ve tried the program three or four times without effect. Here’s how to use it.  
  

## If your PC boots…

  
Thankfully, SFC can still be used if your PC will not even boot up into Windows, but if your OS does boot, you’ve got it especially easy. All you have to do is press WIN + R to open a “Run” prompt, or open your Start Menu to the search function on Vista/7/8, type “cmd” (without the quotes), and press Enter.  
  
Note that on Vista and up, you will need to run the CMD as Administrator. To do this, search ‘cmd’ in your Start Menu, right click on the ‘cmd.exe’ icon, and choose ‘Run as Administrator’  
  
In the command prompt window, now simply type “sfc /scannow” (again without the quotes) and hit Enter to start the reparation process.  
  
It will take a few minutes for SFC to do its thing, during which time I recommend you don’t do anything else with your computer, and after which time I strongly suggest you reboot your computer so that the changes can take effect.  
  
As I mentioned before, sometimes SFC can’t correct all the errors at once, so if you find that some problems are corrected and others still remain, try running SFC again, rebooting, and seeing if it makes any difference.  
  

## If your PC doesn’t boot…

  
Unfortunately, sometimes you can’t be so lucky as to have a bootable PC when your system files are corrupted. In this situation, you will need to pop your Windows installation CD/DVD into the disk drive, reboot, and boot off of the CD (Google is your friend if you need help setting your BIOS to boot off of a CD). If you don’t have a CD/DVD, try booting up the PC and holding F8 just as soon as the Windows boot screen will appear. You will be given the option to boot into a Safe Mode, and with any luck one of the Safe Modes will function enough to get you into a command prompt.  
  
If you do have a CD, in Windows Vista and newer all you have to do in order to find a command prompt window is hit SHIFT + F10 as soon as you’re in the installation screen. Windows XP is a bit tricker, as the installer provides no command prompt access. For this, you will either need to attempt the Safe Mode option, or download and burn a recovery disk that provides you with command prompt from a CD.  
  
At any rate, once you have your command prompt window open, you will need to enter the following, and I will warn you it’s slightly more involved than in part 1 (ignore those quotes!):  
  
“sfc /scannow /offbootdir=d: /offwindir=d:windows”  
  
It may seem complicated–and it kind of is–but your Windows installer does not necessarily use the same drive letters as your installed version of Windows does. Though your situation may differ, usually Windows PE (that’s the technical name of the installer for Vista/7/8) will assign your C drive as a D drive. Unfortunately there’s not a great way to check if this is correct in your situation. You could always type “d:”, “dir” and then see if you recognize the files as being your corrupted Windows drive, but like I said…it’s not a great solution.  
  
At any rate, what you want is for the “d:” to be your corrupted Windows drive, and “d:windows” to be your corrupted Windows folder.  
  
Once you’ve gotten that sorted, run SFC and then reboot to see if you can get into Windows now.  
  
And…that’s about it! Best of luck to all you SFC-ers out there!
