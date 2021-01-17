<!--t Chaos Rings Preservation Project t-->
<!--d Chaos Rings is a classic mobile JRPG series forgotten by its publisher, but it deserves to be remembered! Here&#039;s how you can play it, even today. d-->
<!--tag preservation tag-->
<!--image /content/images/chaos-rings-preservation-project/Chaos_Rings_Logo5B15D.jpg image-->

In the early '10s, Square Enix teamed up with veteran JRPG developer Media Vision to create a series of role-playing games exclusively for iOS, and later, Android smartphones. For the time, it was an incredibly ambitious project with advanced graphics, console-style gameplay, a deep storyline, and a highly memorable soundtrack. Unfortunately, the games were a bit too far ahead of their time, and updates to Android and iOS broke compatibility with them just a few short years after release. Rather than fix the games, Square Enix simply pulled them from sale, leaving arguably the best original mobile game series to be lost to time.  
  
The **Chaos Rings Preservation Project** resurrects the earlier games in the series by using offline, prepackaged emulators running compatible versions of Android on Windows PC. The latest game, [Chaos Rings 3](http://www.chaosrings.com/3/en/), currently retains compatibility with recent versions of Android and iOS and is not included in the project, although it is possible to run it in the same emulators.  
  
Check out this excellent overview of the original game by Andrew Nesvadba, formerly of [PocketGamer](http://pocketgamer.com):  

<iframe src="https://www.youtube.com/embed/A9oOvmu2-XU" frameborder="0" allowfullscreen></iframe>

## Preservation Challenges
Creating these packages was not trivial. Only specific emulators work with specific versions of each game, and hunting down and testing different combinations of each is challenging. Furthermore, each game had to be patched to run without Google Play since it is no longer possible for new users to purchase licenses through the store. In fact, as of this writing, there is _no channel for purchasing_ the first three Chaos Rings games outside Japan. Only the [Japanese PlayStation Vita port][1] remains, and of that, only Chaos Rings 3 is included on the cartridge--the other games are digital exclusives. Since as of this writing Vita emulation is still in its infancy, Android emulation is a last resort. And while Android emulation has made major strides in recent years, it's both a blessing and a curse. 

## Development History
When the Preservation Project began in 2017, emulators were few and messy, but they were the best we had. 

In 2018, that changed, so the Project was updated with new emulators affording better sustainability and compatibility. 

Unfortunately, in 2019, updates to host operating systems broke compatibility with `libhoudini`, Android's ARM to x86 translation layer, rendering even these emulators nonfunctional for many users. To solve this problem, I ultimately decided it was necessary to add a proper Google-developed ARM emulator to the mix. While this has certain disadvantages (ARM emulation requires a very fast CPU), it is highly compatible and should remain so for quite some time. Also, because the emulator is based on QEMU, it should be possible to run the project on Linux and Mac OS as well (BYOB for now--bring your own binary). Besides, if ARM emulation was too slow for a particular user, they could just use the previous emulators, right?

In 2020, things took a turn for the worse with other emulators updating to more recent versions of Android and dropping support for 4.x versions required by Chaos Rings. This is entirely understandable, as these emulators are marketed for the latest and greatest Android games and not for preservation, but in some cases it meant users were locked out from _intentionally_ running an older version of the emulator to run Chaos Rings. By sheer happenstance, I discovered a fork of one such emulator that not only remains on Android 4.x, but also operates entirely offline and does not force updates. As luck would have it, it also happens to be the only x86-based emulator so far that's compatible with all three games in the series! Compiling this emulator into a redistributable package was more work than the rest, but it works, and it works fast. Thus, the Chaos Rings Preservation Project lives on for another year.

## Download
Until an official port to modern platforms is released ([petition Square Enix for that here!][2]), I have decided to make these prepackaged emulators available for download below. To install, extract the contents of each zip file and follow the included instructions.
  
You will need a PC running Windows 7 or newer and at least 4GB of RAM.
  
[Download Chaos Rings I Project (x86, 2018)](https://drive.google.com/file/d/10ncyjs0bt3qvJYgaNjgmGWc7fjBBFK6S/view?usp=sharing "superclick")  
  
[Download Chaos Rings Ω Project (x86, 2018)](https://drive.google.com/file/d/1mx4L-Jn9uXzAD6Aim6EmIJnW54zh9qC7/view?usp=sharing "superclick")  
  
[Download Chaos Rings II Project (x86, 2018)](https://drive.google.com/file/d/1vp4qa-NrpbMsPt-7nyJOpiaDj4Cvb8de/view?usp=sharing "superclick")  

[Download Chaos Rings Trilogy Project (ARM, 2019)](https://drive.google.com/file/d/11GCRdB3bXso50GTTq-YxVlIBfD7wPbPp/view?usp=sharing "superclick")

[Download Chaos Rings Trilogy Project (x86, 2020)](https://drive.google.com/file/d/1vYd_txW5Z0HhUJO7WrIekxmin5ah8ert/view?usp=sharing "superclick")
  
_Note: Files are hosted on Google Drive. If you receive a "download quota exceeded" error message, choose "Make a Copy" and the file will be added to your own Google Drive account._  
  
**Disclaimer: These files are provided as-is and come without warranty, guarantee, or support of any kind, nor are these downloads affiliated with Square Enix or Media Vision in any way. Use at your own risk!**


  [1]: https://www.play-asia.com/chaos-rings-iii-prequel-trilogy/13/7081ff
  [2]: https://support.na.square-enix.com/about.php?la=1&id=1260