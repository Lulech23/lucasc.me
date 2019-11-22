<!--t Update 14 - Hands Off! t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-14-hands-off/update-banner-1-1024x512.jpg image-->
  
Last time, we took an in-depth look at some of the inner workings of VNgen and the challenges presented by adding very non-standard finishing touches on very standardized elements. It's an ongoing challenge, and one that will remain until VNgen's completion. For the past two weeks, however, that hasn't really been the priority. The problem with standard design is that it often leaves a few gaps behind, and the problem with non-standard design is that it often leaves a mess behind. This weekend, we'll be taking a look at how VNgen is cleaning up both, and how automation can make these and other tasks more convenient for the end user. Let's dive right in!  
  

## Don't touch that dial!

While a big draw for visual novels is undoubtedly the addictive little mechanic of clicking through text, there comes a time when some users may wish to have text proceed for them. When first designing text, the challenge was to _prevent_ events from progressing until the user clicked to continue, but for the past two weeks the challenge has been exactly the opposite: create an auto mode.  
  
Auto mode can be enabled or disabled at any time, and uses a custom delay period to give the user time to keep up. In order to keep things as standardized as possible, the code here is much the same as event and action pauses, and as such auto mode pauses will respect overrides such as indefinite event pauses, and there's even a new entry in the debug interface for displaying pause time while in-progress. Neato!  
  

## Quiet on the set!

But that's not the only thing that got automated as of late. While it's always preferable to have a cast of real voice actors bringing your characters to life, budget and platform constraints don't always allow for such luxuries. In such situations, playing a 'blip' sound effect during text progression can fill the silence in a very powerful way.  
  
To that end, vngen\_play\_vox was added to the roster of audio functions. Rather than play a sound once or on loop, vox will remain silent until the text typewriter effect is active, and then repeat itself for each new text character drawn on-screen as a sort of speech synthesis. Of course, real speech is rarely so monotone as a single sound effect, and no two voices are exactly alike. Therefore, pitch can be adjusted on a per-speaker basis to suit different 'voices', or even randomized every frame to give a sense that it really is speech being played!  
  
Another potential limitation of visual novels is that it's not always immediately obvious who's doing the talking. The sort of dialog tags used in traditional writing aren't very compatible with the format, leaving the task of attribution up to other visual cues. The most common of these is a separate text element displaying the current speaker's name above the text itself. Because of this separation in form and function, it was decided to spin off these types of text elements into their own VNgen entity, dubbed "labels."  
  
[![](/content/images/update-14-hands-off/2017-07-27.png)](/content/images/update-14-hands-off/2017-07-27.png)  
_A simulation of what VNgen might look like with production assets and an in-game UI_  
In many ways, labels share all the same attributes as text, but with a few critical differences: one, they don't use a typewriter effect; two, they are not added to the backlog; and most importantly, three, they behave as regular actions and do not require input to progress. All this makes them useful for a number of things, such as displaying labels on your UI which can be localized to different languages. VNgen labels are also more optimized than GameMaker's built-in text functions, so you can save a lot of performance by using them instead—not to mention labels give you access to a plethora of animations and text effects not possible without VNgen.  
  

## Don't feed the bugs!

But enough tooting my own horn. The reality is, labels were about as cool as they were inconvenient at first. The primary motive for creating them in the first place was to have a visual indicator of the current speaking character, and manually creating and replacing and destroying the label element to achieve this isn't exactly a user-friendly solution. There are merits to this approach, such as having cool transitions between characters, but that should be optional, not mandatory.  
  
So I added a new constant: setting a label string to "label.label\_auto" will cause the label element to generate its own text by fetching the names of currently speaking characters, and update itself with each new event. Set it and forget it. One label to rule them all.  
  
Sounds great in theory, and it is, but initially it didn't come without some baggage. Mysteriously, while automatic labels were being generated properly, they were often cut off when drawn to the screen. And as I dug deeper, I came to discover that this issue didn't only affect labels, either. Under the right conditions (or rather, the wrong ones), text exhibited the exact same issue, and a related bug would even appear on characters! The common thread here is that all these elements render to a texture before being drawn on-screen, and fixing the issues in VNgen's handling of this process required some pretty significant rewrites.  
  
Of course, that's all for the better. Characters now maintain their original dimensions when transitioning between sprites rather than stretching to match each sprite's dimensions in the transition. This 'morph' effect might look cool on the backgrounds and text boxes it was designed for, but it was never really a good fit for characters anyhow. Seeing your favorite characters be warped and distorted when changing poses can be rather disturbing.  
  
This same change was then carried over to text, but that only solved half the issue. For the other half, the fancy-pants predictive word-wrap mechanic I described last time had to be completely rewritten for greater precision, which also came with a small performance cost. To offset this, I eliminated the need for predictive word-wrap entirely by inserting "n" into the string at points where linebreaks are necessary. It's a trade-off that places slightly more load on the initialization process while reducing load thereafter. Predictive methods spread out the workload a bit more evenly, but I'm convinced this change is a positive one regardless.  
  
You see, it just so happens that the new text code sets things up nicely for what's to come next: markup. But for that, you'll have to wait until next time!
