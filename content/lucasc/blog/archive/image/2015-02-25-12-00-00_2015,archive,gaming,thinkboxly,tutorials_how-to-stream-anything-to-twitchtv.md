<!--t How to Stream ANYTHING to Twitch.tv (Tutorial) t-->
<!--tag 2015,archive,gaming,thinkboxly,tutorials tag-->
<!--image /content/images/how-to-stream-anything-to-twitchtv/MTIyMzAyMDAyNjYyMjM5NTEz1-1200x7031-1-1024x600.png image-->
  
Gaming has always been a social activity. [Even the earliest videogames were intended to be played by two players](https://www.youtube.com/watch?v=1LsRGUODHlQ). Sure, many of the greatest hits in videogame history may be strictly single-player titles, but that hasn’t stopped gamers from feeling the need to share their experiences and finding ways to do it. And these days sharing gaming experiences is a billion-dollar industry all of its own, thanks in large part to the advent of Twitch.tv, one of the first and definitely the most popular sites dedicated to hosting live streams of gamers playing all over the world. For some Twitch has become a regular hobby, for others an occupation. In any case, it’s certainly the popular thing to do if you’re a gamer, and for good reason: adding more elements of human interaction to videogames simply makes them more rewarding and enjoyable. Perhaps you’ve watched a Twitch stream or two yourself and want to try your hand at being on the other side of the screen, but aren’t sure where to get started. What platforms can be streamed to Twitch, and how? How can you ensure your viewers are getting the best quality footage? At this point there are many options and requirements, and some might seem rather daunting at first, but the fact is if it plays games there’s probably a way to stream them. Here’s how.  
  
**Warning:** this is a big post, so to break it down, here’s a table of contents so you can jump straight to the part that applies to you:  
  
**How to Stream ANYTHING to Twitch.tv**  

- [Handhelds (pre-2011)](#handhelds-pre-2011)
- [Handhelds (post-2011)](#handhelds-post-2011)
- [Smartphones/Tablets](#smartphones-tablets)
- [Game Consoles (pre-2013)](#consoles-pre-2013)
- [Game Consoles (PS4 and Xbox One)](#consoles-post-2013)
- [PC (NVIDIA Shadowplay, AMD Gaming Evolved, and Open Broadcaster Software)](#pc)

  

## Handhelds (pre-2011)

  
Let’s start small. Do you still have a Sony PSP, Nintendo DS, Gameboy Advance, or even an original GameBoy lying around? Believe it or not, you can relive the classics of handheld games gone by and stream your experiences to Twitch. As past handheld consoles are generally low-powered devices, it’s relatively easy to simulate them on a modern PC. No, it’s not quite the same as firing up the devices themselves, but if you’re aiming to share your gameplay online, there’s really no other option. Find an emulator for your platform of choice (such as [PPSSPP](http://ppsspp.org/) or [VisualBoyAdvance](http://sourceforge.net/projects/vbam/)) and then head on down to [the PC section of this post](#pc) and stream them like any other PC title!  
  
Note: ThinkBoxly does not condone piracy, and will never provide links to unauthorized copies of games or BIOS images for use in emulators. It is up to individual users to make backups of their own for emulation purposes. Guides for this process are available on most official emulator sites.  
  

## Handhelds (post-2011)

  
If you’re hoping to stream gameplay from a Playstation Vita or Nintendo 3DS, unfortunately things get a bit harder for you, but still not impossible. While out of the box neither console is capable of recording real-time game footage, if you’re willing to shell out the cash to buy a modded console your streaming dreams can still come true. While modded consoles _definitely_ should be purchased with caution as no warranty remains whatsoever after tampering to add in a video output module, for dedicated streamers this can be a very worthwhile investment.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/20140417_ed619b1.jpg)](/content/images/how-to-stream-anything-to-twitchtv/20140417_ed619b1.jpg)  
  
Sure, you can always point a webcam at the screen, but this will result in some very low-quality footage and just doesn’t look too professional to boot. Either way, most modded consoles output video to a PC via USB using included software, and as far as streaming is concerned the end result is the same as if you’re simply playing a game on PC, so grab your webcam or pick your poison from [3dsvideocapture.com](http://www.3dsvideocapture.com/) (make sure you’re buying a console for your specific region!) and head on down to [the PC section of this post](#pc).  
  
As an alternative for the Playstation Vita, the Playstation TV can be used to stream compatible games to Twitch with a capture card. See the [Game Consoles (pre-2013) section of this post](#consoles-pre-2013).  
  

## Smartphones/Tablets

  
Streaming smartphone screens to other devices has long been the pursuit of many developers, but only recently has it become truly usable, and even now it can be a bit hit-or-miss. Still, this is one platform that will only get better at streaming with time, so it’s worth investigating. Just be aware that as this is still in the infant stages you should be prepared to shell out some cash—there hasn’t even been enough time for freeware alternatives to crop up yet.  
  
iOS devices have it a bit harder than Android in this case, but thanks to AirPlay it is possible to stream from an iPhone/iPad to a Mac and from Mac to Twitch. Japanese Xcode developer Norio Nomura [has created a great writeup](https://gist.github.com/norio-nomura/285adfa572a983be3373) detailing how he does it using a combination of [AirServer](http://www.airserver.com/Download/Referrer/558781), [CamTwist](http://camtwiststudio.com/), [Kuwatec Audio Loopback](http://www.kuwatec.co.jp/preflight/jp/man/contents/audiorec.html), and [CocoaSplit](http://krylon.rsdio.com/zakk/cocoasplit/). If that sounds like a lot of software, it is—that’s just the state of streaming from iOS right now. That may change if Gameloft has its way, though. Already games like Asphalt 8 and Heroes of Order and Chaos have built-in Twitch support that just require you log in to your Twitch account, but aside from these specific titles your options are limited.  
  
On Android the pastures are much greener (see what I did there?) thanks to MOBZAPP’s [Screen Stream Mirroring app](https://play.google.com/store/apps/details?id=com.mobzapp.screenstream) ([free trial here](https://play.google.com/store/apps/details?id=com.mobzapp.screenstream.trial&hl=en)), which is where we’ll be spending most of our time in this section.  
  
First, open Screen Stream Mirroring on your Android phone or tablet and tap the icon in the top left corner to access the left panel menu. Scroll down to the bottom and enter the Preferences screen, which will look something like this:  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/Screenshot_2015-02-23-18-53-18-640x3601.png)](/content/images/how-to-stream-anything-to-twitchtv/Screenshot_2015-02-23-18-53-18-640x3601.png)  
  
Appropriately, the first item in the list is the most important piece of the puzzle, and thankfully the app makes filling it in pretty easy. First select the ‘Server url’ field and choose the location nearest to you from the list that appears. Then tap the ‘How to get my stream key from Twitch ?’ menu entry and allow the app to open a Twitch page in your browser of choice. Log in to your Twitch account when prompted, and then hit the ‘Show key’ button. Your key will appear as a long string of letters and numbers, typically starting with ‘live\_…’. Tap and hold this key until it is highlighted, and then tap ‘Copy’ to copy the whole thing. Now return to Screen Stream’s preferences, and touch the ‘Stream key’ field and paste in your key.  
  
From here the options are more or less up to you. You can enable or disable using your phone or tablet’s camera and microphone in conjunction with streaming your screen, the resolution, bitrate, and framerate of the stream, and more. In general the default settings will be sufficient for high-end devices, but if you find that your stream stutters you may wish to lower the resolution to 480p and the framerate to 24 fps. Hardware encoding should be left enabled unless the stream exhibits odd behavior. The default bitrate of 1245 Kbit/s is already rather low, so avoid reducing this value if possible, but if necessary prioritize smoothness over quality. It’s much easier to look at a low-quality, smooth-running stream than a great-quality stream that stutters.  
  
Note that not all options in Screen Stream’s preferences apply to Twitch—the app supports a number of services, so if you aren’t sure what to do with a particular option, chances are you don’t need to bother with it.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/Screenshot_2015-02-23-19-04-15-640x3601.png)](/content/images/how-to-stream-anything-to-twitchtv/Screenshot_2015-02-23-19-04-15-640x3601.png)  
  
With that done, you’re ready to start streaming your Android device! Return to Screen Stream’s main page and restart the app if prompted. Then open the left panel menu again, and this time under ‘Internet Broadcast’ choose Twitch. With the app now in Twitch mode, just hit the big green play button that appears and with a little luck you’ll be live in seconds!  
  
Note: the above information assumes your Android device is rooted. But don’t worry! You can still use the app if you’re not. [Read all about it here from instructions provided by MOBZAPP](https://962ef4e15bbdf5e413c7afb2f9ccf4de260c6039.googledrive.com/host/0B1HCfnD3G66QMS1KUU5iQTd0eDg/Instructions.txt).  
  

## Game Consoles (pre-2013)

  
Here’s where we start getting into the real fun. For all TV game consoles from WiiU on back you’ll only need one trick up your sleeve, albeit a fairly pricey one: a capture card. A capture card is a little device that connects between your console and your PC and records every piece of video and audio that goes through it along the way and feeds it to your desktop, where it can then be streamed like anything else on PC.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/game_capature_hd11-1.png)](/content/images/how-to-stream-anything-to-twitchtv/game_capature_hd11-1.png)  
  
The first step is choosing the right capture device to suit your needs. The biggest differentiating factor here is whether you will be recording from an HD or analog source, as most capture cards only handle one or the other. While all pre-2013 consoles are capable of outputting to an analog connection, naturally HD is the preferable format where possible (Playstation 3, Xbox 360, and WiiU). Be aware though that HDMI comes with the hazard of HDCP, a built-in copy protection system that may interfere with a capture card’s ability to read data from the console. Do your homework and make sure your intended console will work with your capture device of choice. For starters, Elgato is a pretty well-respected brand in this market, so you may want to begin your search with either the [Elgato Game Capture HD](http://www.amazon.com/Elgato-10025010-Game-Capture-HD/dp/B00840353W) or [Elgato Video Capture](http://www.amazon.com/gp/aw/d/B0029U2YSA). If you’re not afraid to tinker with the internal components of your PC and you’ve got a spare PCI-E slot on your motherboard, [AVerMedia Game Recorder](http://www.amazon.com/AVerMedia-Recorder-C985-Capture-Stream/dp/B007UXJ6LE) is another option for more serious streamers. There also budget options on the low-end, such as the [Diamond VC500](http://www.amazon.com/Diamond-Camcorders-supporting-composite-connection/dp/B000VM60I8), but exercise caution when skimping on this particular type of device.  
  
Once you’ve made your decision and picked up a capture card, simply follow the included instructions to install the necessary drivers and software and connect your console to your PC. Every capture device is a little different, but all function basically the same and make themselves about as easy to use as possible. Once you’ve got a live video feed coming in to your PC from your capture card, jump down to the [PC section of this post](#pc) and stream your gameplay like any other PC games and applications.  
  
As an alternative, emulation of many old consoles is also quite possible for users with high-end gaming PCs. Just beware that there are almost always imperfections to emulating TV consoles, and depending on your hardware your PC may struggle to keep up with emulating and streaming simultaneously. Your games may crash in mid-stream, graphical glitches can occur, and audio can stutter. These days such issues are more the exception than the rule, but there’s always that risk when going the emulator route. If that’s a risk you’re willing to take, [PCSX2](http://pcsx2.net/), [ePSXe](http://www.epsxe.com/), [Dolphin](https://dolphin-emu.org/), [1964](https://code.google.com/p/emu-1964/), and the like are your friends. Again, to stay on the right side of the law it’s your responsibility to make your own backups of games and BIOS data, but thankfully since most TV consoles of the past were disc-based chances are you can simply pop a console game disc into your PC and head on down to the [PC section of this post](#pc).  
  

## Game Consoles (PS4 and Xbox One)

  
Game streaming as an industry really came out of left field, but evidently the folks at Sony and Microsoft foresaw its rise to popularity. One of the most unexpected selling points of both the Playstation 4 and Xbox One is their ability to stream directly to Twitch with no capture card and virtually no software configuration necessary. Technologically, streaming is no simple task for a computer to perform, but you’d never know it with just how well the PS4 and Xbox One handle the process. Without a doubt, if you’re looking to get into game streaming these consoles are the best and easiest way.  
  

#### Playstation 4

  
The Dualshock 4 is the biggest controller redesign in Playstation history. Gone are the familiar Start and Select buttons, replaced now by Options and Share. That Share button actually serves a variety of purposes, from taking a screenshot to recording to the hard drive and also—you guessed it—streaming to Twitch.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/20150224171931-640x3601-1.jpg)](/content/images/how-to-stream-anything-to-twitchtv/20150224171931-640x3601-1.jpg)  
  
To begin, launch the game you wish to stream and push the Share button on your controller. In the menu that appears, choose ‘Broadcast Gameplay’, and select Twitch as the destination streaming service. If this is your first time streaming to Twitch on your PS4, you will be taken to the web browser to log in to your Twitch account.  
  
Once logged in, you will be presented with a few simple options. You can give your broadcast a name, set the quality level, and enable or disable camera and microphone usage (if either is available). Your Twitch stream will automatically be updated to display the game being played. Keep in mind when selecting the quality level that a smooth but low-quality stream is more pleasant to to watch than a stuttery but high-quality one. Try watching your own stream a few times on a separate device and adjust your quality settings to get the best balance for your internet connection. Serious streamers should connect their consoles to a wired ethernet connection for best network performance, but for average users a reasonably fast WiFi connection will do fine on Medium or High quality settings.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/20150224171959-640x3601.jpg)](/content/images/how-to-stream-anything-to-twitchtv/20150224171959-640x3601.jpg)  
  
With these few parameters filled in as desired, you’re ready to hit that ‘Start Broadcasting’ button and be on your way. To stop, simply press the Share button again, navigate to ‘Broadcast Settings’, and choose ‘Stop Broadcasting’.  
  
Tip: the PS4 automatically covers up any screens with potentially private information on them. Your streamers won’t see a thing!  
  

#### Xbox One

  
When the Xbox One was released as a Kinect bundle, many gamers weren’t exactly happy at having the peripheral forced on them. While nowadays the Kinect is optional, streamers will probably want to have it around for how stupidly simple it makes the whole process.  
  
To get started, if you don’t already have it, download the free Twitch app from the Xbox store and open it. Choose the ‘Log in’ option on the bottom left, and get a secondary internet-capable device ready. Your Xbox will display a 6-digit verification code that will be used to link your Twitch account. On another device visit [twitch.tv/activate](http://www.twitch.tv/activate), log in if necessary, and enter this code. With the code entered, hit ‘Activate’ and your Xbox Live and Twitch accounts will be linked.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/wpid-twitch-streaming-on-xbox-one-51.jpg)](/content/images/how-to-stream-anything-to-twitchtv/wpid-twitch-streaming-on-xbox-one-51.jpg)  
  
Return to the Twitch app on your Xbox and this time select the ‘Broadcast’ option on the left. A Twitch broadcasting panel will snap itself to the right of the screen and present you with a few simple options. You can give your broadcast a name and enable or disable camera and microphone usage (if either is available), and in the additional ‘Settings’ menu set more options such as broadcast quality and microphone volume. Your Twitch stream will automatically be updated to display the game being played. Keep in mind when selecting the quality level that a smooth but low-quality stream is more pleasant to to watch than a stuttery but high-quality one. Try watching your own stream a few times on a separate device and adjust your quality settings to get the best balance for your internet connection. Serious streamers should connect their consoles to a wired ethernet connection for best network performance, but for average users a reasonably fast WiFi connection will do fine on Medium or High quality settings.  
  
With these few parameters filled in as desired, you’re ready to hit that ‘Start Broadcast’ button and be on your way. To stop, simply select ‘Stop Broadcast’ from the Twitch panel. During the broadcast the Twitch panel can be unsnapped if desired, in which case a small bar will run along the bottom of the screen indicating that the stream is live and even how many viewers are currently watching.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/wpid-twitch31.png)](/content/images/how-to-stream-anything-to-twitchtv/wpid-twitch31.png)  
  
Alternatively, once this setup process has been completed once, Kinect users can start and stop broadcasts at any time by simply saying “Xbox: broadcast” and “Xbox: stop broadcast” respectively.  
  
Note that for all this to work, certain privacy settings must be in place to allow the Xbox to stream gameplay. If you experience any problems broadcasting, head over to the Settings app and ensure the following settings are in place:  
  

- User profile: Online
- Privacy and online safety > See if you’re online: Everybody
- Privacy and online safety > Broadcast gameplay: Allow
- Privacy and online safety > Share content made using Kinect: Allow
- Preferences > Allow broadcasts and Game DVR uploads: checked
- Kinect > Kinect on: checked
- Kinect > Use Kinect microphone for chat: checked

  

## PC

  
The PC is without a doubt the single most important streaming device out there. Not only is it capable of streaming its own games, but many other platforms rely on it as a streaming middleman, and it can even stream non-game applications too. In true PC fashion, the possibilities are endless. As such, there’s also no one way to get your content from your screen to the internet, and what options you do have may not be terribly straightforward. Though the end result of all is the same, each application serves its purpose for some that other applications might not be able to—or at least, not as well. It just wouldn’t be enough to cover one piece of software, so instead we’ll have a quick look at three of the best: **NVIDIA Shadowplay**, **AMD Gaming Evolved**, and **Open Broadcaster Software**.  
  

#### NVIDIA Shadowplay

  
One of the biggest problems that has plagued streaming since its inception is just how resource-intensive it can be. Games are taxing enough on a PC as it is; for many, the challenge of simultaneously capturing high-quality audio and video and uploading it to the web is just too much to keep up with. That’s where Shadowplay comes in. This NVIDIA-exclusive piece of software is capable of tapping in to dedicated streaming hardware built right into NVIDIA Geforce GTX 600 and newer GPUs, so you can stream your gameplay without affecting performance in the slightest. It’s probably the best streaming option out there if you have a qualifying GPU, and fortunately it’s also pretty darn simple to set up.  
  
Before we begin, make sure you’re on the latest drivers for your GPU and using the latest version of the Geforce Experience application—NVIDIA is constantly improving Shadowplay in little ways, and you should take advantage. Head on over to [the official Geforce website](http://www.geforce.com/geforce-experience) and download the software, or run an update check within the app itself if you’ve already got it. Geforce Experience can check for updates both for itself and for your GPU drivers.  
  
With everything up to date, open the Geforce Experience app and head on over to the Preferences tab, then on the left panel menu choose Shadowplay. Here you’ll be able to configure everything about your stream, such as whether to enable a microphone continuously or only while a certain key is pressed, whether to enable a webcam overlay and which corner of the screen to display it on, whether to enable a ‘recording’ status indicator and which corner to display it on (note that only you, the streamer, can see this icon), and whether to enable an FPS counter and which corner to display it on. On desktop PCs you can even check the ‘Allow desktop capture’ box beneath the monitor graphic to record everything on your screen—not just games. You can also set your own hotkeys for enabling/disabling Shadowplay’s functions outside of the Geforce Experience app, but the default values are recommended.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/nvidia-geforce-shadowplay-1-584x3601.png)](/content/images/how-to-stream-anything-to-twitchtv/nvidia-geforce-shadowplay-1-584x3601.png)  
  
With your preferences in place, click the Shadowplay button in the top right of the app to pop up a small control panel for Shadowplay itself. First hit the switch on the left to turn Shadowplay on, and wait a couple seconds while the drivers kick into action (this will cause your screen to flash—don’t worry, it’s normal). With Shadowplay on, now click the ‘Mode’ button and select Twitch from the drop down menu that appears. Log in to your Twitch account using the green ‘Log in’ button at the top of the window. Next click the ‘Audio’ button on the far right and choose whether to stream in-game audio only or to include microphone audio as well. Then move over to the ‘Quality’ button and choose the best preset for your internet connection or click the ‘Custom’ option to set the resolution, frame rate, and bitrate of your stream manually. Recommended custom settings are 720p at 30 FPS with a bit rate of 3Mbps or higher (Twitch accepts a maximum 3.4Mbps), but remember this is only an ideal. If your internet connection can’t keep up, sacrifice quality as necessary to keep the stream smooth. 1080p should only be attempted on very fast connections. Watch your own stream a few times and play with these settings until you’ve found the best balance of quality and frame rate.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/nvidia-geforce-shadowplay-2-584x3601-1.png)](/content/images/how-to-stream-anything-to-twitchtv/nvidia-geforce-shadowplay-2-584x3601-1.png)  
  
If you aren’t sure what bit rate your internet connection can handle, head on over to [speedtest.net](http://www.speedtest.net/) and run a test to see what your upload (not download) speed is for yourself. If your stream bit rate meets or exceeds this value, it will stutter and potentially even crash your modem in extreme cases. Pick a bit rate somewhat lower than your upload speed to leave a bit of slack for other network processes.  
  
With all your settings in place, you may close the Geforce Experience app (it will keep running in the background from your system tray) and launch the game or application you wish to stream. Simply press Alt + F8 (or your custom hotkey) to start and stop the stream. A status indicator will appear to let you know when you’re live.  
  

#### AMD Gaming Evolved

  
The war between AMD (formerly ATI) and NVIDIA is as old as time itself…or a couple decades, at least. So from the moment NVIDIA first unveiled Geforce Experience and Shadowplay, it was only a matter of time before AMD developed a similar suite for their own GPUs, right down to the awkward title.  
  
The AMD Gaming Evolved client (also abbreviated as GEC) made by Raptr is designed for Radeon HD 7000 and newer GPUs, but AMD hasn’t set any hard GPU requirements for the software. You can even use an NVIDIA card, for that matter! Before we get started, make sure you’re on the latest drivers for your GPU and using the latest version of the GEC. Head on over to [the official Gaming Evolved client website](http://raptr.com/amd) and download the software, or run an update check within the app itself if you’ve already got it. The GEC can check for updates both for itself and for your GPU drivers.  
  
With everything up to date, open the AMD Gaming Evolved client to the ‘Home’ tab. First, ensure the ‘Replay’ feature is set to ‘off’, as it cannot be used simultaneously with Twitch broadcasting.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/AMDGEC-1-516x3601.png)](/content/images/how-to-stream-anything-to-twitchtv/AMDGEC-1-516x3601.png)  
  
Next click on the Twitch button to turn the broadcasting feature on and you will be prompted to log in to your Twitch account. Once logged in a window will appear confirming that Twitch broadcasting has been enabled.  
  
Return to the ‘Home’ tab and this time simply hover your mouse over the Twitch button and click the small gear icon that appears in the bottom right corner. This will take you to the Twitch streaming preferences menu, where you can give your stream a name, enable or disable webcam and microphone usage (if available), and even choose a couple of overlay options. Checking the ‘Include Raptr GUI as part of Twitch Stream’ box will allow viewers to see some of the extra features of AMD Gaming Evolved, specifically an in-game overlay menu that allows for interacting with the software on-the-fly. Unchecking this box will not disable the overlay, but will ensure that only you see it—not your viewers. ‘Enable live Twitch chat feed over your game’ is exactly what it sounds like—a way to monitor and participate in the Twitch chat for your stream without exiting the game or running a secondary device exclusively for chat. It’s a neat feature, and a pretty significant boon over competing applications. Your Twitch stream will automatically be updated to display the game being played.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/AMDGEC-2-476x3601.png)](/content/images/how-to-stream-anything-to-twitchtv/AMDGEC-2-476x3601.png)  
  
With your basic preferences set how you like them, switch to the ‘Quality’ tab and choose the best preset for your internet connection or click the ‘Custom’ option to set the resolution, frame rate, and bitrate of your stream manually. Recommended custom settings are 50% max video resolution at 30 FPS with a bit rate of 3000 or higher (Twitch accepts a maximum 3400), but remember this is only an ideal. If your internet connection can’t keep up, sacrifice quality as necessary to keep the stream smooth. 100% max video resolution should only be attempted on very fast connections or PCs with low-resolution monitors. Watch your own stream a few times and play with these settings until you’ve found the best balance of quality and frame rate.  
  
If you aren’t sure what bit rate your internet connection can handle, head on over to [speedtest.net](http://www.speedtest.net/) and run a test to see what your upload (not download) speed is for yourself. If your stream bit rate meets or exceeds this value, it will stutter and potentially even crash your modem in extreme cases. Pick a bit rate somewhat lower than your upload speed to leave a bit of slack for other network processes.  
  
With all your settings in place, you may close the AMD Gaming Evolved client (it will keep running in the background from your system tray) and launch the game or application you wish to stream. Simply press Ctrl + \[ to start and stop the stream. The GEC in-game overlay will appear to confirm starting the stream and display your chat feed (if enabled).  
  

#### Open Broadcaster Software

  
While NVIDIA Geforce Experience and AMD Gaming Evolved may be the most user-friendly streaming options for PC, they’re not exactly the most utilitarian. Filling the gap on that end of the scale are pretty much all other streaming applications—and yes, there’s much more than just one. That being said, the Open Broadcaster Software application (also abbreviated as OBS) has quickly risen to be a favorite of the internet for being both free and highly versatile. It runs on any PC with Windows Vista SP2 or newer, and also has a port for Mac OS 10.8 or newer, with Linux support planned in the future.  
  
To get started, download the Open Broadcaster Software from [obsproject.com](https://obsproject.com/) and run the installer. Run the application when finished, and permit it to install any updates it finds. When all’s said and done, you’ll be greeted with the main OBS interface.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/obs-1-589x3601.png)](/content/images/how-to-stream-anything-to-twitchtv/obs-1-589x3601.png)  
  
Click the Settings button towards the bottom right of the interface and get ready to click through a whole lot of technical jargon. But first, before leaving the ‘General’ tab from the left menu panel, give your ‘Setting profile’ a memorable name and click ‘Add’. You may also wish to check the ‘Notification area icon’ and ‘Minimize to notification area’ boxes.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/obs-2-640x2681.png)](/content/images/how-to-stream-anything-to-twitchtv/obs-2-640x2681.png)  
  
Next select the ‘Encoding’ tab on the left, choosing ‘yes’ to save and apply your changes if prompted. Under the ‘Video encoding’ section, leave the encoder set to ‘x264′ and leave ‘Use CBR’ and ‘Enable CBR padding’ checked. The ‘Max bitrate’ field directly sets the overall quality of the stream, but naturally the higher quality the stream, the faster internet connection is required to push the data through. Ideally set this field to 3000 or higher (Twitch accepts a maximum 3400), but remember this is only an ideal. If your internet connection can’t keep up, sacrifice quality as necessary to keep the stream smooth. If you aren’t sure what bit rate your internet connection can handle, head on over to [speedtest.net](http://www.speedtest.net/) and run a test to see what your upload (not download) speed is for yourself. If your stream bit rate meets or exceeds this value, it will stutter and potentially even crash your modem in extreme cases. Pick a bit rate somewhat lower than your upload speed to leave a bit of slack for other network processes.  
  
Under the ‘Audio Encoding’ section, leave the codec at ‘AAC’ and the format at ’48kHz’. ‘Bitrate’ here should ideally be 160 or higher, but like the video bitrate, this is merely an ideal. Be prepared to dial this value back to 128 or lower if your stream stutters. ‘Channel’ should be left on ‘stereo’.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/obs-3-640x2191.png)](/content/images/how-to-stream-anything-to-twitchtv/obs-3-640x2191.png)  
  
Now switch to the ‘Broadcast Settings’ tab on the left panel menu, again selecting ‘yes’ when prompted to apply and save your settings. Ensure the broadcast ‘Mode’ is set to ‘Live Stream’ and set the ‘Streaming Service’ to Twitch. Then select the location nearest to you from the ‘FMS URL’ drop down menu.  
  
Next you’ll need to retrieve your Twitch stream key to give OBS access to your account and permission to stream to it. Point your web browser to [twitch.tv](http://www.twitch.tv/broadcast/dashboard) and log in to your [account dashboard](http://www.twitch.tv/broadcast/dashboard). Select the ‘Stream key’ tab from the dashboard menu and click ‘Show key’ to retrieve your key, which will appear as a long string of letters and numbers, typically starting with ‘live\_…’. Highlight this string and hit Ctrl + C to copy the key. Now return to the OBS settings menu and hit Ctrl + V to paste the key into the ‘Play Path/Stream key (if any)’ field.  
  
The rest of the encoder settings are up to you. ‘Auto-Reconnect’ should generally be left checked, and ‘Minimize Network Impact’ unchecked. You can optionally save the stream directly to your hard drive while streaming too, which will be enabled with a click of the ‘Automatically save stream to file’ checkbox. You can also set the location on your hard drive to save the stream, if desired, and check the ‘Keep recording if live stream stops’ box to prevent any unexpected network errors from cutting off your own local copy of the video capture.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/obs-4-434x3601-1.png)](/content/images/how-to-stream-anything-to-twitchtv/obs-4-434x3601-1.png)  
  
You may also notice that OBS has started to display a few warnings in scary red print. Ignore them for now—they will be addressed when we get to the ‘Advanced’ tab. For now switch to the ‘Video’ tab instead and save changes when prompted. Here you can choose which monitor to record (if multiple monitors are in use) and what resolution to record at. The ‘base resolution’ fields should probably not be tampered with—just ensure they match your monitor’s current operating resolution. On the other hand, it is recommended to set the ‘Resolution downscale’ to 1280×720 (or whatever is closest) and the ‘Filter’ to ‘Bilinear’.  
  
Next switch to the ‘Audio’ tab on the left and apply changes when prompted. ‘Desktop Audio Device’ and ‘Microphone/Auxiliary Audio Device’ should both function just fine when left to the ‘Default’ option, but if either your game audio or microphone is not picked up by your stream, try changing these to specify your speakers and microphone directly. If you notice one audio source overpowering the other, you can adjust the volume by increasing either the ‘Desktop boost (multiple)’ value or ‘Mic/aux boost (multiple)’ value. These values are multipliers, meaning a value of 1 equals 100% volume, a value of 2 equals 200%, and so forth.  
  
Now switch to the ‘Hotkeys’ tab in the left panel menu and apply any changes along the way. Here you can set key combinations to trigger a variety of actions in OBS, but you only really need to worry about three in particular: ‘Push-to-talk’, ‘Start stream’, and ‘Stop stream’. Click in each field and press the key or keys you wish to use to trigger each action. This is entirely up to you, but be sure to pick uncommon combinations that won’t be used by any game or other application. Ctrl, Alt, and Shift are your friends here.  
  
Finally, navigate to the ‘Advanced’ tab and apply changes to save your hotkeys. Many of OBS’s advanced settings won’t need your attention at all, but a few are more important than the rest—particularly those needed to correct the issues the software warned about in the ‘Broadcast Settings’ tab. At the top of the window, ensure ‘Use Multithreaded Optimizations’ is checked, then move down to the ‘Video’ section. Generally leave the ‘x264 CPU preset’ on ‘veryfast’ (PCs with powerful CPUs can handle slower settings), but set the ‘Encoding Profile’ to ‘main’ and the ‘Keyframe interval’ to 2. That’s it! Apply the changes and click ‘OK’ to close the settings menu.  
  
Now that we have OBS configured to stream video properly, we have to give it a video to stream! Back on the main screen, right click in the ‘Scenes’ box and choose ‘Add scene’ (if none are already created). Think of a scene as a blank slate to fill with content. Next, click the ‘Global Sources’ button and in the window that appears click ‘Add’ to add a video source to your scene (using a global source as opposed to a local source for an individual scene is optional, but for the purposes of this guide we’ll use a global source). Your source can be one of several things depending on what it is you’re trying to stream. You can capture one individual window (‘Window Capture’), your entire PC monitor (‘Monitor Capture’), games (‘Game Capture’), or a video feed from a capture card (‘Video Capture Device’) as discussed in the [Game Consoles (pre-2013)](#consoles-pre-2013) section of this post. Select the one that best applies to your desired use-case. While each of these sources has a plethora of unique options, generally only one or two self-explanatory parameters actually needs to be set manually, and the rest can be left as default. Each source will prompt for a name as well, so you can easily manage multiple sources without having to reconfigure them on each use. As an added benefit, using global sources means the same source can be added into multiple scenes, which coincidentally is the next step once you’ve selected a source type and added it to the list. Click ‘OK’ to close out of the global sources menu, and then right click the ‘Sources’ box and choose Add > Global Source > the global source you just created.  
  
[![](/content/images/how-to-stream-anything-to-twitchtv/obs-5-589x3601-1.png)](/content/images/how-to-stream-anything-to-twitchtv/obs-5-589x3601-1.png)  
  
You will be prompted for a name again, which you can either change or leave as-is, and then the source will be added to the scene.  
  
To make sure everything works as desired, click ‘Preview stream’ and a live preview of your stream will appear in the OBS window. If the video displays properly and you see sound being registered in the microphone and speaker meters, you’re ready to start streaming for real! Either click ‘Start Streaming’ from the OBS window or put those hotkeys to good use! Remember, if you followed this guide explicitly, you can now click the minimize button to hide OBS away into your system tray where it will remain, listening for hotkeys and streaming video and audio unobtrusively.  
  
Note that OBS has the potential to be **very** resource-intensive and may slow down even high-end PCs if care is not taken. Avoid using full monitor capture when possible, and pay attention to the rate of dropped frames in the bottom right of the OBS window (only visible while broadcasting). If more than a few frames are being dropped, reduce your quality settings.  
  
Also note that a single scene can have multiple sources. Advanced users can create some very sophisticated streams with multiple video feeds or even entire interfaces complete with custom graphics and statistics (see the ‘Image’ and ‘Text’ source types). And of course your scenes are always saved, so once you’ve put in the hard work to design a great stream, you can always come back to it later. The possibilities are endless, making OBS a fantastic tool for the serious streamer. If becoming one is your aspiration, look no further, and learn this tool well.
