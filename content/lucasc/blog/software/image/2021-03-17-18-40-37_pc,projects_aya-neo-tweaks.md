<!--t Aya Neo Tweaks &amp; Add-ons t-->
<!--d Tweaks and add-ons I&#039;ve created to improve the user experience of the Aya Neo and similar handheld PCs. Expect this space to grow over time! d-->
<!--tag PC,projects tag-->
<!--image /content/images/20210317191114-aya-neo-igg.jpg image-->

The Aya Neo is a Windows-based PC in the form factor of a handheld games console. Though not the first of its kind, it's the first that really nailed the ergonomics one would expect of similar consoles, such as the Nintendo Switch. In 2020, Aya burst onto the internet as one of the most ambitious and passionate hardware developers I've ever seen. An initial prototype of the Neo [literally held together by Legos](https://www.youtube.com/watch?v=su2z0eMHviY) led many to question if it would ever become a serious product, but lo and behold, in 2021 it was already arriving to domestic customers' homes in China, while ranking #1 among popular projects on IndieGoGo for international sales.

As a developer, a part of me loves tinkering with these devices almost as much as I enjoy actually using them. I love being able to bring my entire Steam, GoG, or Epic library with me on a portable device—all without double-dipping game purchases, and all cloud synced to other PC's. However, Windows was never intended for this particular task, and it shows. The user experience has always been a challenge for handheld PCs of this nature, and the Aya Neo is no exception.

<iframe width="560" height="315" src="https://www.youtube.com/embed/1QJ9IvzncEk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

On this page, you'll find a collection of tweaks and add-ons I've created to improve the user experience of the Aya Neo and similar handhelds. Expect this space to grow over time, so be sure check back for updates if you want more!

### Contents
 - [DisplaySwitch](#displayswitch)
 - [Driver Essentials](#drivers)
 - [OnDock](#ondock)
 - [Optimized Power Profiles](#powercfg)
 - [ReplaceOSK + TabTipProxy](#replaceosk)
 - [WindowShade (Formerly BluePill)](#windowshade)
 - [WinShot](#winshot)

#### Other Recommended Tools
 - [AyaGyroAiming](https://github.com/Valkirie/AyaGyroAiming)
 - [Project SBC](https://github.com/project-sbc/Power-Control-Panel)

 
# Tweaks & Add-ons

---

<div style="position: relative; text-align: right; margin-top: -0.75em; margin-bottom: -128px;"><img src="/content/images/20210317192355-neo-min.png" style="opacity: 0.15; width: 100%; max-width: 640px; margin: 0; display: inline-block;" /></div>

## 🔄 DisplaySwitch {#displayswitch}
Going for that Switch-like experience? The Aya Neo has a 1280x800 display—perfect for handheld gaming on the go, not so perfect for most external displays. That's a 16:10 aspect ratio, and probably considerably lower-res than the TV or monitor you're outputting to. These two factors can result in awkward scaling depending on Windows's default projection setting. 

![DisplaySwitch Tiles](/content/images/20210612160645-displayswitch.png)

Normally, projection settings can be easily accessed via the Win + P keyboard shortcut or digging through Action Center, but neither option is very touch-friendly on a 7" screen. Fortunately, there is an alternative. Projection is actually handled by a discrete application in the Windows `System32` folder, meaning you can make your own shortcuts and pin them as nice, big tiles on your desktop, taskbar, or Start menu.

Which mode you want to use will likely depend on what content you're projecting. The Vega GPU in the AMD 4500U is more than capable of playing back 4K video on an external display, in which case you will need to extend or disable the internal screen to reach full resolution. Games, however, may be better off sticking to a lower resolution. As always, the advantage of being a PC is that the choice is yours.

I've compiled a complete set of shortcuts which you can download below. Or, create your own shortcut pointing to `C:WindowsSystem32DisplaySwitch.exe` followed by the argument `/clone`, `/extend`, `/external`, or `/internal`.

[Download DisplaySwitch Shortcuts](/share/DisplaySwitch.zip "superclick")

---

## 🛠 Driver Essentials {#drivers}
As an AMD-based platform, most drivers for the Aya Neo can be applied directly from Windows Update or by installing the latest [Radeon Software](https://www.amd.com/en/technologies/radeon-software). This is a huge improvement from older Chinese handhelds I've used, which relied on smaller brands that never had much official support. 

However, both the touch panel and rotation sensors remain unrecognized by a fresh Windows installation out of the box. This is a big problem for navigation, since the device will be stuck in portrait orientation with no input method to speak of. As such, I've provided a handy .zip file with the needed missing drivers here. These are extracted directly from a stock Aya Neo, so there's no need to worry about sources.

You will need to plug in a USB keyboard and/or mouse to install. Once downloaded, simply open Device Manager, locate the unidentified devices, and choose "Update Driver".

[Download Driver Essentials](/share/ayaneo-drivers-essentials.zip "superclick")

---

## ⚓ OnDock {#ondock}
As handheld PC's grow ever more powerful, their use-cases are expanding too. Combined with the convenience of a single USB-C cable to connect external monitors, mice, keyboards, and more at once, docking is taking the world by storm, and not just for gaming.

However, how you use a Windows-based computer when docked and when mobile may be quite different. Wouldn't it be nice if your PC automatically reconfigured itself when docking and undocking?

Well, now it can!

OnDock is a combination of PowerShell and Windows Task Scheduler that runs silently in the background and consumes nearly no resources. It listens for changes to either the current power source or number of connected displays, and executes custom actions accordingly. Copy any scripts, programs, and files to the `Connect` and `Disconnect` folders in your Start menu, and OnDock will automatically execute them when you connect or disconnect from your docking solution!

[Download OnDock](https://github.com/Lulech23/OnDock "superclick")

---

## ⚡ Optimized Power Profiles {#powercfg}
Out of the box, the Aya Neo uses Windows' default "Balanced" power profile. This profile is actually quite good these days, and does a decent job giving performance where you need it and battery life where you don't. However, the Neo is a special device, and there's still room for improvement.

My Optimized profile is designed to reduce CPU utilization for better balance with the GPU. Outside of emulation, very few games will benefit from more than 2.3 GHz, but the Neo CPU routinely clocks up to 3.5 GHz by default. This starves the GPU of power and needlessly wastes battery life--plus generates a lot of fan noise, besides. Tweaks have also been made to improve processor *consistency*, so you won't see constant clocking up and down, creating unstable framerates. For best results, these tweaks modify low-level settings not typically visible to the user.

This is great for a handheld dedicated to native PC games, but unfortunately, emulation performance will suffer as a result. So, for emulation fans, I've also included a second "Boost" profile that will allow the CPU to clock up higher when needed, but more conservatively than the default settings.

[Download Optimized Power Profiles](/share/ayaneo-powercfg-optimized.zip "superclick")

---

## ⌨ ReplaceOSK + TabTipProxy {#replaceosk}
A common challenge with handheld PC's is text input. While Microsoft has made great strides adapting Windows to touch-based interfaces, it remains primarily a mouse and keyboard experience. And in case you didn't notice, the Aya Neo has no physical keyboard. To mitigate this limitation, Aya included a hardware button on the device itself to trigger a virtual on-screen keyboard instead. This simulates the Win + Ctrl + O shortcut built-in to Windows—a smart choice to avoid dependence on custom software—but unfortunately triggers the legacy OSK which has existed since Windows XP. Windows 10 also ships with a much better, more modern touch keyboard known as TabTip, which is a bit like a smartphone keyboard on steroids.

<iframe width="560" height="315" src="https://www.youtube.com/embed/v6Wh1OB6Kzc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

ReplaceOSK is a PowerShell script I wrote to replace the legacy OSK with TabTip at the system level. Because PowerShell scripts are restricted by default, it is wrapped in a Batch loader to fully automate the experience. Furthermore, an included .NET application, TabTipProxy, manages the TabTip process to improve usability. In the interest of keeping things open, all code is included inside the script and compiled directly on the end user's PC. This approach allows the Neo hardware shortcut to operate the modern keyboard without any remapping software running in the background. Just run the script and you're good to go.

Decide ReplaceOSK isn't for you? Don't worry: the process is completely reversible! Just run the script again to completely restore your system to its original state.

Early Aya Neo adopters and Aya employees themselves have described ReplaceOSK as an essential addon, and you can even find it featured on the official [Aya Neo website](https://www.ayaneo.com/downloads).

[Download Replace OSK](https://github.com/Lulech23/ReplaceOSK "superclick")

---

## 💻 WindowShade (Formerly BluePill) {#windowshade}
The Aya Neo is an amazing handheld PC, but early units shipped with a default display calibration that leaves much to be desired. Like its namesake movie, it possesses a strong green tint out of the box. That's fine for moody action films, not so great for an entire user experience.

![WindowShade Before & After (Simulated)](/content/images/20210625214541-bluepill.jpg)

WindowShade is a PowerShell script designed to automate applying better color profiles, including ones I calibrated myself. Achieving true white balance is probably impossible on the current-gen Neo panel, but I was able to reach a pleasing compromise, at the very least.

Proper calibration is not simple, requires lots of time, and the tools are somewhat hidden beneath a tree of outdated Windows settings screens. That's a hurdle for end users, so take the BluePill instead!

WindowShade also supports applying custom .icc/.icm/.icz files via commandline argument, making this a tool useful for any PC!

[Download WindowShade](https://github.com/Lulech23/WindowShade "superclick")

---

## 📸 WinShot {#winshot}
In 2013, Sony unveiled an unexpected change to the DualShock controller for PlayStation 4: a dedicated Share button. Ever since then, I've been hooked. Chronicling the journey in images and video clips has become an integral part of playing a videogame for me. The memories are just as real and just as nostalgic as a real photo album, often serving as reminders of the real-world context in which they were created.

But just like real photos, the moment is often gone before you can capture it. Without that dedicated Share button, that is.

Enter WinShot: a universal screen capture solution for PC games. WinShot transforms the Windows key on your Aya Neo (or physical keyboard) into a one-touch solution for capturing screenshots and video clips via the Xbox Game Bar. Long-press to capture a screenshot, or double-press to start/stop recording video in the active window. And don't worry: a quick single-press will still activate the Start menu like always.

Using the Xbox Game Bar means your captures will be saved regardless of what game launcher you're using, and you can even cloud sync the results across devices with OneDrive!

[Download WinShot](https://github.com/Lulech23/WinShot "superclick")