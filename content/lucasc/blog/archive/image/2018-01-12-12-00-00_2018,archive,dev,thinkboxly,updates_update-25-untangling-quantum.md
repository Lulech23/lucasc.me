<!--t Update 25 - Untangling Quantum t-->
<!--tag 2018,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-25-untangling-quantum/update-banner-1024x512.jpg image-->
  
It's been four weeks since the last regular update on VNgen. While normally that'd be enough time for some major changes and improvements, between the holidays and personal family matters holding back development, this weekend's focus will be slightly different than usual, with regular VNgen updates to resume next time.  
  
Even with delays and reduced work hours, however, progress has certainly been made. Some of it has been largely experimental and required rolling back, but not without gaining valuable knowledge in the process. The rest has been the polar opposite: fundamental changes and enhancements to VNgen's core framework, Quantum.  
  
Unless you've seen Quantum's codebase for yourself―and unless you're me, you haven't―it might seem like a bit of a nebulous black box considering the way I've spoken about it and how even on its [product page](https://xga.one/quantum/) there's no option to buy or download Quantum for yourself. But the reason for this is less to keep it a secret than it is because... well, you probably wouldn't find it very exciting if you could. Unlike VNgen, Quantum functions don't accomplish big tasks for you in a single keystroke. Instead, Quantum is designed as a framework for writing code that tackles those big tasks.  
  
Put simply, Quantum provides a means of executing code in sequence—which is much more complex than it sounds. It removes the element of CPU cycles from programming logic so that all developers have to worry about is real-world time instead. This is such a fundamental change to the way projects are designed that it's nearly impossible to add Quantum in after the fact without simply rewriting. It'd be like converting linear logic to state machines, to name another programming technique.  
  
Chronological sequences are everywhere in almost any programming project, but until now there hasn't been a standardized method or framework for handling all of them. This has led to scenarios like remasters of old games being locked to 30 frames per-second because the game logic itself is designed to operate at that speed (even though modern hardware could easily run it much faster). The accepted solution today is to adjust timing values by "delta time", or the difference (delta) between the time it took to process the previous frame and the current one. However, there's no universally accepted method for utilizing delta time, either.  
  
Although Quantum itself is not a timing function, by providing that standard it solves the timing problem while also providing numerous other features to boot.  
  
And here's where we get to the new stuff. A while back, I introduced the command console to VNgen as a quick way of navigating and debugging the engine in real-time. It's a handy feature, and while I don't add new code to Quantum on a whim, I found myself wishing it was built-in at the very core often enough that I decided to do just that.  
  

<iframe src="https://gfycat.com/ifr/FlimsySlowHawaiianmonkseal" frameborder="0" scrolling="no" width="100%" height="100%" style="position:absolute;top:0;left:0;" allowfullscreen></iframe>

  
The new command console, dubbed QCMD, might not look all that different from the one already present in VNgen, but under the hood it's a total rewrite. QCMD is more compact, more efficient, and more powerful in a variety of ways.  
  
Crucially, QCMD is portable. Like Quantum itself, it's designed to fit within the scope of any project, and can be added to any project by itself without dependencies. By contrast, VNgen's original command console was spread throughout engine code, making it rather unmanageable. QCMD is also designed to initialize only the minimum required variables until called, meaning using it in consumer products won't occupy unnecessary resources for end-users—a process it handles automatically.  
  
But the real advantage of QCMD, and the change that made it a viable candidate for addition to Quantum, is that commands are externally defined. A handful of basic commands are included by default, and developers can easily add their own which will be cross-compatible with any Quantum-based products moving forward. VNgen being one of them, this means advanced users have the power to add their own debug functions specifically for their visual novel projects to speed up and smooth out development.  
  
[![](/content/images/update-25-untangling-quantum/qcmd-example.png)](/content/images/update-25-untangling-quantum/qcmd-example.png)  
_A sample custom QCMD command script. Yep, it's that simple!_  
QCMD will be included in the next update of VNgen. If you haven't taken advantage yet, VNgen is still available in Early Access on both [Itch.io](https://xgasoft.itch.io/vngen) and the [GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6083/vngen-visual-novel-engine) at a **33% discount**, good until the v1.0 release—which is coming up soon, so act now!  
  
And with that, I leave you with your weekly Yugure no Kagami status report. Expect big things to develop in this space in 2018!  
  

## Yugure no Kagami Status Report

[What is Yugure no Kagami? Click here to learn more!](http://www.ynkgame.com/)table span { background-color: #06F; color: #FFF; padding: 5px 10px; display: inline-block; }  

**Script:**

100%

**Artwork:**

1%

**Music:**

100%

**Programming:**

75%

**Voice:**

0%
