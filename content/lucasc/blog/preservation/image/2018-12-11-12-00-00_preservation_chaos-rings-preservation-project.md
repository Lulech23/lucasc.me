<!--t Chaos Rings Preservation Project t-->
<!--d Chaos Rings is a classic mobile JRPG series forgotten by its publisher, but it deserves to be remembered! Here&#039;s how you can play it, even today. d-->
<!--tag preservation tag-->
<!--image /content/images/chaos-rings-preservation-project/Chaos_Rings_Logo5B15D.jpg image-->

## Quick Links

 - [Support the Series!](#support)
 - [Downloads](#download)

## About
In the early '10s, Square Enix teamed up with veteran JRPG developer Media Vision to create a series of role-playing games exclusively for iOS, and later, Android (and even Windows Phone!) devices. For the time, it was an incredibly ambitious project with advanced graphics, console-style gameplay, a deep storyline, and a highly memorable soundtrack. Unfortunately, the games were a bit too far ahead of their time, and updates to Android and iOS broke compatibility with them just a few short years after release. Rather than fix the games, Square Enix simply pulled them from sale, leaving arguably the best original mobile game series to be lost to time. 
  
Check out this excellent overview of the original game by Andrew Nesvadba, formerly of [PocketGamer](http://pocketgamer.com):  

<iframe src="https://www.youtube.com/embed/A9oOvmu2-XU" frameborder="0" allowfullscreen></iframe>

The **Chaos Rings Preservation Project** resurrects the series by using offline, prepackaged emulators running compatible versions of Android on Windows PC. The latest game, [Chaos Rings 3](http://www.chaosrings.com/3/en/), currently retains compatibility with recent versions of Android and iOS and is still available for purchase.

## Preservation Challenges
Creating these packages was not trivial. Only specific emulators work with specific versions of each game, and hunting down and testing different combinations of each is challenging. Furthermore, each game had to be patched to run without Google Play since it is no longer possible for new users to purchase licenses through the store. In fact, as of this writing, there is _no channel for purchasing_ the first three Chaos Rings games outside Japan. Only the [Japanese PlayStation Vita port](https://www.play-asia.com/chaos-rings-iii-prequel-trilogy/13/7081ff) remains, and of that, only Chaos Rings 3 is included on the cartridge--the other games are digital exclusives. Since Vita emulation is still in its infancy, Android emulation is a last resort. And while Android emulation has made major strides in recent years, it's both a blessing and a curse.

## Development History

### • 2017
The first release of the Chaos Rings Preservation Project. This early effort relied on three separate emulators to cover the spectrum of games in the series, because no single emulator was compatible with all four of them. Each emulator required a different setup process, and some even went defunct themselves. While this release ultimately proved unsustainable, it succeeded in identifying and archiving a selection of APK and OBB files of the specific versions and patches needed for running the series in emulators at all. These archives would provide the foundation for all future versions of the project.

### • 2018
Updated the project with new emulators affording better sustainability and compatibility. Or so it seemed...

### • 2019
Updates to host operating systems broke compatibility with `libhoudini`, Android's ARM to x86 translation layer, rendering even the updated emulators nonfunctional for many users. To solve this problem, I ultimately decided it was necessary to add a proper Google-developed ARM emulator to the mix. While this has certain disadvantages (ARM emulation requires a very fast CPU), it is highly compatible and should remain so more or less indefinitely. Also, because the emulator is based on QEMU, it should be possible to run the project on Linux and Mac OS as well (BYOB for now--bring your own binary).

Creating the AVD release of the Chaos Rings Preservation Project was tricky, seeing as Google's Android SDK was not made to be portable. However, by identifying just the parts needed to run Chaos Rings, I was able to create a stripped-down version with minimal external dependencies (handled entirely by an included setup script).

### • 2020
While Android emulation was once an interesting experiment, by now it is an industry of its own. Though that may seem like a good thing for the project, unfortunately, it has driven emulator developers to update to more recent versions of Android while dropping support for 4.x (required by Chaos Rings). This is entirely understandable, as these emulators are marketed for the latest and greatest Android games and not for preservation, but in some cases automatic updates have become so aggressive it's virtually impossible to _intentionally_ run an older version of the emulator. By sheer happenstance, however, I discovered a fork of one such emulator that not only remains on Android 4.x, but also operates entirely offline and does not force updates. As luck would have it, it also happens to be the only x86-based emulator so far that's compatible with all four games in the series! Compiling the XePlayer emulator into a redistributable package was more work than the rest, but it works, and it works fast with few compatibility issues.

### • 2021
This year turned out to be an unexpectedly important year for game preservation as a whole, and Chaos Rings is no exception. Sony [officially closing the digital storefront](https://kotaku.com/sony-closing-playstation-store-on-ps3-vita-and-psp-th-1846575103) for the PlayStation Vita means the last remaining avenue to legitimately buy 75% of the series is now gone. 

At the same time, Chaos Rings 3 is beginning to show signs of compatibility issues with recent Android and iOS devices. While a November 2020 patch resolved some of them, many devices remain affected. I commend Square Enix for  continuing to support the game, but with Android 12 on the horizon threatening to introduce still more compatibility issues, it remains to be seen how long the fixes will hold. All this considered, I have decided it is now time to add Chaos Rings 3 to the Preservation Project, while **strongly** urging anyone interested to [buy the game](#support) while it's still available.

Fortunately, there is some good news as well! 2021 has yielded a variety of new ways to emulate Chaos Rings, including [one method on Android itself](https://www.vmos.com/). Recently, VMOS added support for running Android 4.x ROMs in virtual machines on modern Android devices. This is a truly fantastic development, and means you can now play Chaos Rings I and II on real Android devices again. Chaos Rings Omega and Chaos Rings III currently do not run well in VMOS, but if this problem can be solved, it will be a real candidate for a future Preservation Project release.

![Chaos Rings LD Launcher](/content/images/20210411174045-chaos-rings-ld.jpg)

This year, I also happened to discover yet another Windows emulator--and it's a big one. Though it has long since moved on from Android 4.x support, old versions of LDPlayer (internally known as DNPlayer) still exist around the internet, and as it turns out, it's by far the most compatible Android emulator I've tested yet. All four games in the Chaos Rings series run flawlessly--which is the first time I can say that since the project started in 2017! Because this is a very old version, it runs completely offline (the servers for it no longer work) but it also happens to be very light and surprisingly portable. I was easily able to strip out a few unnecessary bits and create a script to handle the setup in place of a full installer. Since everything else worked out so smoothly, I decided to go the extra mile for this release and also include a nice graphical launcher to replace the standard Android icons.

Because of issues with older versions of the Project and how the new version renders them totally obsolete in every way, I have now removed 2017-18 releases and recategorized the others by their emulator rather than release year. **I highly recommend using the LD version** from here on out.

## Support the Series! {#support}
The ultimate goal of the Preservation Project is to show Square Enix that an audience still exists for Chaos Rings and that the series deserves to live on modern platforms. If you want that too, [petition Square Enix for a re-release here](https://support.na.square-enix.com/about.php?la=1&id=1260)! In the meantime, if you decide to use the Preservation Project, please make sure to buy Chaos Rings III to show your support! It's the last 

[Buy Chaos Rings III on Android](https://play.google.com/store/apps/details?id=com.square_enix.chaosrings3gp&hl=en_US&gl=US "superclick")
[Buy Chaos Rings III on iOS](https://apps.apple.com/us/app/chaos-rings/id958455860 "superclick")

## Download {#download}
Until an official port to modern platforms is released, I have decided to make these prepackaged emulators available for download below. To install, extract the contents of each zip file and follow the included instructions.

You will need a PC running Windows 7 or newer and at least 4GB of RAM. Each release contains all games in the original trilogy--you only need to download one!

[Download Chaos Rings LD (2021)](https://drive.google.com/file/d/1dgmJpCv7AlSbv1s7gMHhc22qsJs3Uvl5/view?usp=sharing "superclick")

[Download Chaos Rings Xe (2020)](https://drive.google.com/file/d/1vYd_txW5Z0HhUJO7WrIekxmin5ah8ert/view?usp=sharing "superclick")

[Download Chaos Rings AVD (2019)](https://drive.google.com/file/d/11GCRdB3bXso50GTTq-YxVlIBfD7wPbPp/view?usp=sharing "superclick")

***Disclaimer: These files are provided as-is and come without warranty, guarantee, or support of any kind, nor are these downloads affiliated with Square Enix or Media Vision in any way. Use at your own risk!***