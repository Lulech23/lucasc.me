<!--t TRON: Evolution Windows 10 Patches Guide t-->
<!--d TRON: Evolution is no longer supported by Disney, but you can still play it on PC with these patches! d-->
<!--tag gaming,PC tag-->
<!--image /content/images/20200504192717-tron-evolution-banner.jpg image-->

At the time of writing, it's officially the 10th anniversary of the much-anticipated return of TRON. TRON: Legacy, the sequel to the original 1982 film, was only a modest hit at the box office in 2010, but it certainly wasn't for lack of trying. Disney put their entire marketing machine to work to celebrate TRON's return, with cross-promotions ranging from Coca-cola to electric razors (yes, really). A handful of videogames were also produced, spanning the range of available platforms at the time.

The main entry, TRON: Evolution, was a direct prequel to the film, and its plot even receives a direct reference near the movie's climax. Beyond that, it greatly fleshes out the central conflict and the techno-philosophical concepts that drive it. Perhaps it was one step too nerdy for mainstream success, but the game remains an integral part of the TRON franchise nonetheless. It's also historically significant in a cultural sense due to its emphasis on parkour--all the rage for 2010. From a technological standpoint, TRON: Evolution is notable for its effective portrayal of the iconic TRON: Legacy aesthetic in Unreal Engine 3, using a clever combination of baked and real-time reflections. Modern techniques such as SSR or RTX were not in use at the time, and would not have run well on Xbox 360 or PlayStation 3, yet TRON: Evolution's reflections are arguably superior to screen-space implementations even today.

![][1]

Unfortunately, on PC, the game was loaded with middleware that fell out of favor only a handful of years after its release. Microsoft dropped support for SecuROM in Windows 10, and Disney let their license for the DRM scheme expire, preventing new installations from activating. Microsoft also deprecated Games for Windows LIVE, which TRON: Evolution uses for its multiplayer, achievements, and profile management. Worse still, NVIDIA broke compatibility with older versions of the PhysX engine used by many Unreal Engine 3 games, meaning your GPU will almost certainly reject the game outright.

Fortunately, all of these problems can be solved, and with less hassle than you might think!

## What You Need:
_(\*If you're having issues downloading the files below, I've made the entire collection available as a single download from [a different location here][2])_

### The Game
* A copy of TRON: Evolution, either [physical][3] or digital, with a valid CD key
    * The Steam version was pulled following Disney's SecuROM license expiration, but you can still download it from your library if you already own it. Otherwise, tracking down a DVD copy or unused Steam key from an authorized third-party reseller is your best bet.
    * Steam users can view their CD key by right-clicking on the game in the library and navigating to **Manage > CD Keys**

### SecuROM tools
* Online activation is no longer possible, so you will need to use SecuROM's "offline" activation method. That's in quotes because you'll still need to be online, but instead of connecting to SecuROM's services automatically, you'll need to [plug in a couple codes to their activation page here][4]. (If this fails, [see the end of this post][5].)
* If you receive the error: `Release Date Check Failed`, you'll need to install the offline activation patch. [SecuROM provides downloads for all versions of the game here][6], or you can [download a backup I created here][7].
* If you receive the error: `Activation Limit Exceeded`, you can [download a tool from SecuROM][8] to revoke your previous activations, or [download a backup I created here][9].

### Games for Windows LIVE
* The version of GFWL included with TRON: Evolution should work for most users. **Try that one first.** If it doesn't work, you can [download the latest online installer from Microsoft][10], or [download a backup I created here][11].
    * If the online installer gets shut down for good, try the offline installer. You can [download a backup I created here][12].
* GWFL does not support 2-step verification. In order to login, your Microsoft account must have this security feature disabled. You can edit this setting at [https://account.microsoft.com/security/](https://account.microsoft.com/security/)
    * Signing in with GWFL is not required to play the game, but online features will be disabled.

### NVIDIA PhysX
* NVIDIA has provided a backwards-compatibility package for older versions of PhysX. You can [download the installer from NVIDIA][13], or [download a backup I created here][14].
    * This package applies regardless of your GPU vendor--NVIDIA, AMD, or Intel. By default, all physics are calculated on the CPU anyway, and by now even low-spec PCs should have no trouble running the game at high performance without a PhysX-enabled GPU.
    * The legacy PhysX package **will not overwrite** your current PhysX drivers included with modern NVIDIA GPUs. You do not need to install the legacy version again after updating your drivers--it's entirely separate.

## How to Install:

### Step 1: Install the game using the built-in installation method
DVD or digital. You get the idea.

Either way, **make sure you run the game once** before proceeding. It will perform some first-time setup processes, then fail.

One such process will be...

### Step 2: SecuROM activation
TRON: Evolution will prompt for a CD key. Enter it, but you might want to keep it in your clipboard, because the activation will fail and you'll need the CD key again.

![][15]

Upon failing, SecuROM will display a different menu with the option to **Activate Manually**. Choose it, then paste your CD key into the **serial** box. Also go to [the TRON: Evolution offline activation webpage][16] and paste your CD key in the **serial** box there. Highlight and copy the **Unlock Request Code** from the activation window and paste it into the activation webpage **Unlock Request Code** box.

![][17]

Click **Generate Unlock Code** and copy the result into the SecuROM manual activation window **Unlock Code** box. Finally, click **Activate**, and you're done.

<sup>*(Activation failed even though your CD key is legit? [See the end of this post][18] for a true offline activation method.)*</sup>

### Step 3: PhysX
With the initial setup complete, the game will crash. Maybe you'll see the splash screen for a few seconds, or maybe you'll get a whole lotta nothin'. Either way, it is now finished installing and configuring any runtimes and middleware. The most important in this case is NVIDIA PhysX, which is the cause behind the crash. The game ships with an obsolete version that no longer works on modern hardware, but thankfully, NVIDIA was kind enough to create a legacy package to fix that.

Simply [install the legacy PhysX package][19] and you're good to go! Again, you need this regardless of whether your GPU is NVIDIA, AMD, or Intel.

**Now would be a good time to reboot your PC.** Not all systems require it, but in some cases, the game will refuse to launch until you do so.

### Step 4: Games for Windows LIVE
After a reboot, run TRON: Evolution again, and this time, it should launch successfully. Enjoy the intro sequence and title screen, because that's as far as you'll get before GFWL interrupts you and demands a login.

If you don't wish to login, or the servers go offline someday, you can opt to create a local GFWL profile instead.

![][20]

Otherwise, enter your Microsoft account credentials (the same you use to login to Windows 10 itself) and your profile will begin downloading... then fail. GFWL will prompt you that an update was found and needs to be applied. Accept and wait momentarily while the update is installed in-game. You'll receive a pop-up warning you that you must return to the title screen, but what it _won't_ explain is that you really have to quit the game entirely.

Close the GFWL overlay and enter the game in offline mode, then choose **Quit to Desktop**. Upon exiting, a GFWL update window and firewall exception request will appear. Accept the exemption while waiting for the update to complete.

When both are finished, run TRON: Evolution again. This time, you can login to your account, and your profile will be downloaded successfully.

Huzzah! You now have full access to both online and offline modes of the game.

### Step 5: Enhancements and DLC

**Low-res got you down?** While you'll probably be happy to see the game boot at all by this point, there's a good chance you'll notice that it doesn't look as sharp as it could. By default, it will run at 1280x720, and the in-game settings menu only goes up to 1600x900. What gives?

Fortunately, this is Unreal Engine 3, and setting a custom resolution is simple. Exit the game and open your file manager. Navigate to your `..\Documents\Disney Interactive Studios\Tron Evolution\UnrealEngine3\GridGame\Config` folder and edit **GridEngine.ini** in your favorite text editor. Search for the settings `ResX` and `ResY` and change them to your desired screen resolution.

For example:
```
ResX=3840
 ResY=2160
```

You'll probably also want to search for `MaxAnisotropy` and change it to `16` for best texture clarity.

Impressively, the game scales perfectly to 4K and beyond. Only loading screen text and enemy health bars will appear smaller than they should--all other UI elements display at the correct scale.

**Don't like sitting through splash screens?** In the same **GridEngine.ini** file, search for `StartupMovies` and change any you don't want to see to `SkippableMovies`.

**Interested in multiplayer?** A free DLC map pack was released as a day-one download, containing Codestream Nexus, User's Palace, and a Sam Flynn skin. This DLC has been collected by the community in [a simple installer][21]. You can [download a backup I created here][22]. Simply run the setup and you're good to go! The DLC applies to both physical and digital distributions.

### Conclusion
And... that's it! You're done. Enjoy the game! Or [keep looking through the config][23]--Unreal Engine is a gold mine for INI editing deep divers. See what other parameters you can find to customize your experience!

![][24]

## Troubleshooting
If you're still having issues at this point, your best bet is to track down the game's log files and try pinpointing the issue for yourself. Navigate to your `..\Documents\Disney Interactive Studios\Tron Evolution\UnrealEngine3\GridGame\Logs` folder and you'll find a collection of text files detailing any problems you may have encountered. `Launch.log` should be particularly insightful here, as it always contains the latest issues.

### Touchscreen devices
For example, when I tried running TRON: Evolution on my tablet, I found this line:

```
Log: === Critical error: ===
 Assertion failed: SUCCEEDED( DirectInput8Mouse->SetDataFormat(&c_dfDIMouse) )
```

At first glance, this statement seems ironic. But look a little closer and the solution is quite simple: TRON: Evolution requires a mouse to be connected to your PC to launch! In 2010, it was simply assumed you wouldn't have a touchscreen PC of all things. Sure enough, upon connecting a Bluetooth mouse, the game booted up without a hitch!

### Fullscreen with High DPI
For the most part, TRON: Evolution handles high-res displays just fine. However, if you are running at a lower resolution than your native display, you may find that "fullscreen" gives you a small window instead. This is an error in Windows display scaling and can be fixed by disabling it and letting the application take over scaling duties instead.

![][25]

Navigate to your program files' `..\TRON Evolution\Binaries\Win32Live` directory and right-click on `GridGame.exe`. Choose **Properties**, then navigate to the **Compatibility** tab. Choose **Change high DPI settings**, then check the box **Override high DPI scaling behavior**. Set **Scaling performed by:** to **Application**, then click **OK**, and **Apply**. No other compatibility settings are required.

The game will now run in proper fullscreen at any resolution.

### SecDrv Errors
Because Windows 10 technically removed support for SecuROM, you may receive errors regarding SecDrv.sys in your Windows Event Log or elsewhere. While the errors should be benign and asymptomatic for most users, you can solve them by removing SecuROM from your system after the installation is complete. (You will need to use the Reloaded Patch below as a substitute.)

To remove SecDrv, open the Windows Registry Editor by searching "regedit" anywhere in the Start menu. You'll find SecDrv data in two locations:

`HKEY_LOCAL_MACHINE\SYSTEM\ControlSet001\Services\SecDrv`
`HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\SecDrv`

`CurrentControlSet` is symbolically linked to `ControlSet001`, so deleting the `SecDrv` folder from the latter will also delete it from the former. Export the folder first as a backup (good practice for any RegEdit modifications) and then remove it. Next, navigate to `C:\Windows\SysWOW64\drivers` and delete the file `SECDRV.SYS` (or move it to a backup location to be safe).

The SecuROM driver is now removed from your system and should no longer generate errors. You can now apply the Reloaded Patch below to play without SecuROM.

### Other issues
Some issues might not always be so obvious, but fortunately, this is an Unreal Engine 3 game. There's tons of information available [straight from the source][26] and third-party forums around the web. Chances are you'll be able to identify the problem and fix it in no time.

![][27]

## I'm reading this 25 years in the future and these methods no longer work! Help! {#securom-more}
When a product has been completely abandoned by its creators, there exists a fine line between piracy and preservation. While I firmly believe in owning legitimate licenses of software, there may be times when obtaining one is impossible, and/or times when legitimate users must resort to unauthorized means to continue using software they already own.

I would highly encourage TRON: Evolution players to follow the above guide first, but in the event SecuROM activation fails or shuts down for good, alternatives do exist to get into the game. These methods will break DRM, but considering Disney itself no longer owns a license to the DRM... well, let's just say it's a gray area.

The following tools are provided here in the interest of preservation only--I leave it to you to make any moral judgment calls about using them.

### 80_PA SecuROM true offline activation tool
If the official SecuROM "offline" activation is shut down for good, a tool exists which can generate unlock codes for you directly on your PC (you know, _actually_ offline). The 80_PA utility uses the same algorithm and behaviors as the real SecuROM activation service, so the results are indistinguishable from the real thing, as far as your PC is concerned.

**Important Notice:** [Some antivirus software][28] may detect 80_PA as ransomware or a trojan. I have personally verified these are false positives, and are triggered because the utility has the ability to make changes to the Windows registry. Ironically, it only uses it to identify and remove _invasive registry entries by SecuROM itself_. (Insert "DRM is malware" meme here.) [Many other antivirus applications][29] detect that 80_PA is clean. That being said, I cannot _guarantee_ 80_PA is safe to use. **Proceed with caution, and use at your own risk!** To safeguard your PC, you may wish to run 80_PA in a [virtual machine][30] or with 'sandboxing' software such as [Sandboxie][31].

If you wish to continue, you can [download a backup I created of 80_PA here][32].

### TRON: Evolution Reloaded patch
If activating SecuROM is not an option, your only chance at getting into TRON: Evolution is to patch it out. A modified executable by Reloaded exists to circumvent the game's DRM and boot without any SecuROM fuss at all. Some might even see it as the ideal way to play the game in a post-SecuROM world.

Installation is simple: just extract the modified files to your program files' `..\TRON Evolution\Binaries\Win32Live` directory and overwrite when prompted. Then run `GridGameLauncher.exe`, and you're in.

**Important Notice:** [Some antivirus software][33] may detect the file `rld.dll` in the Reloaded patch as a trojan. This is triggered because the DLL uses obfuscated code--meaning, it intentionally hides its function. Obfuscation in itself does not indicate malicious intent, it simply makes it harder to judge what the code will and will not do. Some antivirus will elect to distrust any obfuscation by default, while [many other antivirus applications][34] detect `rld.dll` is clean. I have not personally detected any negative side effects or unwanted background processes while using the Reloaded patch. That being said, I cannot _guarantee_ the Reloaded patch is safe to use. **Proceed with caution, and use at your own risk!**

If you wish to continue, you can [download a backup I created of the Reloaded patch here][35].

## Conclusion
As always, preservation is a developing scenario, and if [the game has changed][36], I will do my best to keep this post updated with the latest information on preserving this piece of tech and pop culture history.

See you in the grid.

//END OF LINE


  [1]: https://lucasc.me/content/images/20200505125529-tron-evolution-fight.jpeg
  [2]: https://www.dropbox.com/s/vdopqfn4sbyvb1u/TRON_Evolution.zip?dl=0
  [3]: https://www.amazon.com/TRON-Evolution-PC/dp/B0030MOXA8/ref=sr_1_1?dchild=1&keywords=pc%20pc%20TRON:%20Evolution&linkCode=ur2&qid=1588649466&sr=8-1
  [4]: https://support.securom.com/TronEvolutionUnlock/
  [5]: #securom-more
  [6]: https://support.securom.com/pop_tron.html
  [7]: https://app.box.com/s/ph94h218gaa5exd4rimqty8ivd1dr38u
  [8]: http://download.securom.com/support/sacred2/revokes2.zip
  [9]: https://app.box.com/s/jysmh78aigyq3v2mhz4x08vsbw0xhfs1
  [10]: https://go.microsoft.com/fwlink/?LinkID=201134
  [11]: https://app.box.com/s/x8twcbs8am76otb81xo7izaw2og90ynz
  [12]: https://app.box.com/s/hxkr4mncizwjq1j48ym9of6cszx437ei
  [13]: https://www.nvidia.com/en-us/drivers/physx/physx-9-13-0604-legacy-driver/
  [14]: https://app.box.com/s/r31alcksgblc0b9u1x7pkzffgleza7kv
  [15]: https://lucasc.me/content/images/20200505131407-activationfailed_en.jpg
  [16]: https://support.securom.com/TronEvolutionUnlock/
  [17]: https://lucasc.me/content/images/20200505131423-activationfailed2_en.jpg
  [18]: #securom-more
  [19]: https://app.box.com/s/r31alcksgblc0b9u1x7pkzffgleza7kv
  [20]: https://lucasc.me/content/images/20200505132210-gfwl-accounts.png
  [21]: http://tronfaq.blogspot.com/2006/02/all-tron-20-files-in-one-place.html#tronevolutiondlc
  [22]: https://app.box.com/s/th8nl80ooay0h7uw7pb5ynv0h357we03
  [23]: https://www.pcgamingwiki.com/wiki/Tron:_Evolution
  [24]: https://lucasc.me/content/images/20200505164213-tron-evolution-tank.jpg
  [25]: https://lucasc.me/content/images/20200505164547-tron-high-dpi.jpg
  [26]: https://www.unrealengine.com/en-US/previous-versions/documentation
  [27]: https://lucasc.me/content/images/20200505132512-tron-evolution-cycles.jpg
  [28]: https://www.virustotal.com/gui/file/330096d4c989339594a4ea66d427864aecd0c69470f8af1e2819cc854977eeba/detection
  [29]: https://www.virustotal.com/gui/file/330096d4c989339594a4ea66d427864aecd0c69470f8af1e2819cc854977eeba/detection
  [30]: https://www.virtualbox.org/
  [31]: https://github.com/sandboxie-plus/Sandboxie/releases/tag/v0.4.2
  [32]: https://app.box.com/s/98oledqfrnaee1h6mr559ooqiz4qkvct
  [33]: https://www.virustotal.com/gui/file/b2e45cd6788c1f77ad7d91372f80ed9fb9d2552810d4ddd7b81ab3ae682e3980/detection
  [34]: https://www.virustotal.com/gui/file/b2e45cd6788c1f77ad7d91372f80ed9fb9d2552810d4ddd7b81ab3ae682e3980/detection
  [35]: https://app.box.com/s/7ta91tgzrdug5jicv6tt70g55usajj1l
  [36]: https://www.youtube.com/watch?v=aLHdFnEyQC8