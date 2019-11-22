<!--t Finding Success in Failing Health - A VNgen Post Mortem t-->
<!--tag 2018,archive,dev,features,thinkboxly tag-->
<!--image /content/images/finding-success-in-failing-health-vngen/screenshot_blog_thumbnail-1024x576.png image-->
  
_[VNgen is a visual novel and animation engine for GameMaker Studio](https://xgasoft.itch.io/vngen). Using a custom scripting syntax, it is designed to produce premium content quickly and easily on a wide variety of platforms. It is currently being used to create both first-party and third-party indie games of multiple genres. If you value my work, please consider [supporting me on Patreon](https://www.patreon.com/xgasoft). Your support will play a critical role in the ongoing development of these and future projects. Stay tuned to the end of this post for details!_  
  
I'll be honest: [VNgen had a rough launch](https://lucasc.me/post/update-34-i-hate-delays). Days turned into weeks, things came up, and I had my head down trying to get through it all without breaking something in haste.  
  
But it _did_ launch, and you can now [download VNgen 1.0.2 for both GameMaker Studio 1 and 2](https://xgasoft.itch.io/vngen) RIGHT NOW! GMS 2 users can even [try VNgen for FREE](https://marketplace.yoyogames.com/assets/7019/vngen-free-trial) with the trial version, so what are you waiting for?  
  
Reception so far has been extremely positive, and I appreciate everyone's patience as 1.0 and post-launch fixes rolled out a bit slower than I had planned.  
  
Indeed, "slower than planned" has been a theme throughout VNgen's entire development, but not without justifiable cause. Today, I feel it's appropriate to stop a moment, look back on the road behind us, and talk about that development from the start, as well as what it means for the future. I'm not here to share excuses. In fact, VNgen's development is a far more personal story than anything I've shared here before. But it is one I feel is worth sharing, and one which might inspire or at least offer solidarity to other developers who've been through similar trials. So buckle up!  
  

## Bright Beginnings

I like to say all great ideas are either thought up by accident or in the shower. For me, it was both.  
  
Back in 2014, I was speaking with a friend of mine about some of our mutual favorite Japanese anime and role-playing games. We were both still cooling down from some literally life-changing experiences with both, and the idea was floated to me that perhaps we should make our own game inspired by them. Initially I was resistant, knowing that it'd be a monumental undertaking, but later that night as I continued thinking about it (yes, in the shower), an idea came to mind against my better judgment. I pictured a scene of a protagonist waking up in the middle of the night to discover that the reflection of the moon in his mirror doesn't match up with reality. Touching the mirror in curiosity causes him to switch places with his own reflection, landing him in a parallel world caught in the crossfire of a battle between the sun and the moon, personified as metaphysical warriors and savage beasts.  
  
An entire mythology quickly formed around this idea, and I jotted everything down as fast as I could—characters, scenes, lore—and presented it to my friend the next day. He was immediately on board.  
  
The project was dubbed _Yugure no Kagami_ - The Mirror of Dusk.  
  
[![](/content/images/finding-success-in-failing-health-vngen/logo-timeline-1024x192.png)](/content/images/finding-success-in-failing-health-vngen/logo-timeline-1024x192.png)  
_Evolution of the Yugure no Kagami logo over the years_  
Together, we originally planned Yugure no Kagami to be an isometric RPG, but dissatisfaction with existing RPG engines led me on a quest to create my own instead. A fair amount of work was done on it too, as you can see in the city test environment below:  
  

<iframe src="https://gfycat.com/ifr/DecisiveGaseousFoal" frameborder="0" scrolling="no" width="100%" height="100%" style="position:absolute;top:0;left:0;" allowfullscreen></iframe>

_An early work-in-progress of the isometric engine intended for Yugure no Kagami_  
The engine was christened Yugen Engine, with the slogan "finite is freedom," a catchy (and naive) reference to its ad-hoc design. It entailed UI systems, dialog and user choice systems, and of course, the isometric world itself, which was actually quite advanced considering writing something like this was way above my programming skills at the time. Yet, reaching over my head taught me countless lessons that would prove critical for future development.  
  
One was simply programming philosophy. Little did I know that pure two-dimensional isometric depth sorting is a mathematical challenge that even veteran game developers struggle with. Most isometric engines and tutorials that I studied depended on every element being placed in a grid to circumvent this challenge, but that wasn't good enough for me. I didn't want to lock myself into a particular resolution that might limit level design or the engine's usefulness in the future. Although it would've been easier to just accept the way things had always been done, I stuck to my convictions and—with much head banging on the wall—eventually managed to create an isometric engine that allowed mixed element sizes and non-uniform positioning with correct depth sorting in every situation.  
  
It was a revelation: on top of all the mathematical and programming skills I'd gained, I'd finally grasped the concept of something far more significant: engine design. Modularity, agnosticism, flexibility. The sky was the limit. I had a partner, we had an engine. I'd work on story, he'd work on art. That was the plan. Our ambitions flew in the face of Yugen Engine's motto, and should've been clear indication that things were about to take a different turn.  
  
But neither of us could've guessed the path life was about to set for us.  
  

## Disaster Strikes

In early 2015, my partner and I were both hit with completely different near-fatal illnesses at almost the same time. Development came to a halt and the project was shelved for months, only coming up in passing conversation between medical tests and trying to keep up with our day jobs in spite of abysmally poor health. It was an existential crisis, and at its worst, it was unclear whether either of us would have the quality of life to find value in living at all. Every waking moment was pain—an untouchable, internal pain that couldn't be soothed or massaged away, the sort that siphons every ounce of strength you've got. In my partner's case, the cause was blood poisoning. For me, the cause was completely unknown. After weeks of testing, it was finally discovered I had an intestinal growth which was promptly removed, but this was itself only an effect of something much deeper gone wrong. I wasn't in as much pain, but I simply could no longer process a vast majority of foods. Although no doctor ever said it, the logical end of this condition was clear: if I couldn't eat, my days were numbered—and the rate at which I was rushed through tests normally delayed by weeks-long waiting lists suggested they knew it.  
  
This too was a revelation: a revelation of my own limitations, mortality, and the need to find value in life by putting value into it. For whatever time I had left, I needed something more to live for than simply struggling to survive. I needed something more to be _remembered_ by. Yugure no Kagami became like a ray of hope in that dark hour—a purpose beyond myself that was actually within reach.  
  
In the midst of this crisis, I dialed back our original ambitions and reworked Yugure no Kagami's story as a visual novel, starting work on the script immediately. Meanwhile, the dialog portion of Yugen Engine was rewritten and spun off into Edge VN, my first proper visual novel engine.  
  
I might not be able to make the best RPG, but I was determined to make the best visual novel instead.  
  

## From the Ashes

Fun fact: if you sent me a support email during Edge VN's early days, there's a good chance I answered from a waiting room at some medical facility or another. But despite the circumstances, these interactions were entirely positive. Edge VN was received favorably by indie developers (moreso than it deserved, in retrospect) and the constant feedback and feature requests provided a sense of motivation and purpose when I needed it most. Edge VN quickly grew well beyond its original scope and even made it to the PlayStation 4 in [Woodsy Studio's _Echoes of the Fey_](https://store.playstation.com/en-us/product/UP2973-CUSA07857_00-1234123412341234).  
  
[![](/content/images/finding-success-in-failing-health-vngen/psn-screenshot-1024x771.png)](/content/images/finding-success-in-failing-health-vngen/https://store.playstation.com/en-us/product/UP2973-CUSA07857_00-1234123412341234)  
_Edge VN even powered games on PS4_  
Growing organically like this opened my eyes to just how powerful a visual novel engine could be, but it was clear Edge VN would never be that engine. The cracks in its codebase grew ever wider the more features I tacked onto it, and fundamentally, the experience of developing content just wasn't good. I'd intentionally kept the code as simplistic as possible to make it easy to modify, but while that makes a nice philosophy in theory, in practice, most developers just want an engine to work _without_ modification. And working simplistic code that's spread all over the place to avoid unnecessary complexity ultimately proved more complex anyhow. Revelation #3: complexity in programming is a ratio. Either the programmer has to deal with it, or their users do. It's inversely proportionate.  
  
As 2015 turned into 2016, health improved for both my partner and me, but not without side effects. My partner lost his ability to draw due to nerve damage, jeopardizing a critical component of Yugure no Kagami. (Thankfully, he was able to receive corrective surgery to fix this, but not until much later.) In the meantime, I learned to draw in his stead—on top of my existing writing and programming duties, not to mention my own ongoing health struggles. I permanently lost the ability to eat a vast number of foods, but through my own research and experience I managed to radically restructure my diet while finding supplements to compensate for lost physical capabilities and keep me alive. And so the long process of finding a new normal began.  
  

## Second Chances

[![](/content/images/finding-success-in-failing-health-vngen/vngen-demo-preview-1024x576.png)](/content/images/finding-success-in-failing-health-vngen/vngen-demo-preview-1024x576.png)  
  
Recognize these two? If you've seen the recent [VNgen Character Demo](https://www.youtube.com/watch?v=ny9TIG0X4vQ), you should. Miki and Mei are VNgen's twin mascots, first drawn at the end of 2016 for what was then known as Edge VN 2 (hence the twins).  
  
By the start of 2017, Edge VN 2 was already known as VNgen and [unveiled to the world on this very site](https://lucasc.me/post/update-02-introducing-vngen-future), which was repurposed into a devblog for the new engine. Yugure no Kagami's script was completed (a 300,000-word behemoth I'm very proud of and never want to write again) and the time had come to forge a path forward in earnest. It was clear by now that Edge VN was unsustainable and unsuited for such a large project, and VNgen was my effort to remedy this by changing the way developers interacted with it from the ground up.  
  
What I didn't expect was to change the way developers work with code in general.  
  
Edge VN had taught me a lesson in the curious power of names—of _identity_. You can create something in code, but with no way to address it, you have no way to control it. On the other hand, a simple ID is all it takes to gain the freedom to manipulate your creations however you want. In Edge VN, IDs had to be assigned manually to individual lines of text. For VNgen, I needed to step it up two notches: IDs needed to be assigned automatically... and to groups of _code itself_.  
  
The solution did not come easily. For a solid month, I worked on a design document for what would eventually become VNgen. It was an agonizing process of reverse-engineering logical thought experiments to try and arrive at the right beginning from the desired end. Initially, I wasn't sure if that end was even possible in GML (my programming language of choice). The first night I developed a working prototype, it took _three hours_ of staring at a blinking cursor to come up with anything to write. The concept was simply so far out there and so delicate that it had to be perfect, otherwise it wouldn't work at all.  
  
Then, finally, a word came.  
  
Then another.  
  
Then another, with others slowly to follow.  
  
The next few days were a series of painstaking additions, redactions, and iterations. But eventually... it worked. The result wasn't all that impressive to look at. I could make some numbers appear on the screen in sequence—so what? But I knew the potential of what I had just achieved, and that it would completely change the way I and many others approached programming forever.  
  
The [Quantum framework](https://www.xga.one/quantum) was born—a programming paradigm akin to state machines, but on a whole new level. While Quantum may not actually rely on quantum mechanics, it operates on something like a science fiction version of it. Quantum assigns IDs to segments of code called 'events', which exist in true, false, or indeterminate states. Because events have their own unique identities, the same code can be run inside them and yet produce different results based on context. It's also possible to change _when_ individual events are executed, either delaying them or skipping from one event to another, forwards and backwards alike—and GML doesn't even have a [GOTO command](https://en.wikipedia.org/wiki/Goto)!  
  
Quantum isn't limited to GML, either. The framework can easily be recreated in any Turing-complete programming language, meaning any code built on it is automatically cross-language compatible to an extent as well. Quantum makes it possible to build a syntax within a syntax, essentially freeing the programmer from many of the conventions of the language they're writing in.  
  
_I could make some numbers appear on the screen in sequence._ Quantum was working. And that meant VNgen could work too.  
  

## Proving Grounds

Code-based products exist in a strange market category. They need to address two distinct types of consumers simultaneously: developers and end users. Edge VN focused entirely on the latter category: the end user experience was pretty good, but the developer experience left much to be desired. Armed with Quantum, I set out to fix that and make VNgen a great experience for both.  
  
The key, aside from Quantum, is a word I mentioned earlier: **agnosticism**. I had to assume as little as possible about _how_ VNgen would be used to avoid the same pitfalls that limited Edge VN's ability to grow over time. In practical terms, this meant allowing developers to create as many entities of a given type as they want. Want more than one spoken line of text on the screen at once? Sure. More than one textbox? Go for it. These are the types of things Edge VN _assumed_ would be solitary, and the entire engine's design suffered for it. For VNgen, I separated each category of entity into its own data structure, where entries could be added, removed, and sorted to determine drawing order. These operations were then abstracted into actions for Quantum events, creating something like a scripting syntax developers could use to write visual novels with minimal setup and minimal programming experience required.  
  
[![](/content/images/finding-success-in-failing-health-vngen/frame-qscript-1024x662.png)](/content/images/finding-success-in-failing-health-vngen/frame-qscript-1024x662.png)  
_A demo VNgen script running on Quantum_  
I started by focusing on the textbox as a template. At first glance, it might seem like there's not much to it. It's just a static image—how complex could it be? I made it my goal to find out, and to come up with a set of standardized manipulations that could be applied to other entities as well. First came position, rotation, and scale—those were obvious enough—and then color blending. Color blending? Make that four-color gradient blending. And position, rotation, and all that? How about a stripped-down version of Quantum that behaves like animation keyframes so all those modifications can be animated in sequence? Now, what if the textbox could be subdivided into triangles, and each individual triangle's position animated as well? And why not add shaders to the mix?  
  
How complex can a static image be? Pretty complex, it turns out.  
  

<iframe src="https://gfycat.com/ifr/SizzlingImpracticalCivet" frameborder="0" scrolling="no" width="100%" height="100%" style="position:absolute;top:0;left:0;" allowfullscreen></iframe>

_An early test of combining different types of manipulations_  
But it was work that only needed doing once: the more I explored, the more I realized how much each entity in a visual novel truly has in common. All those advanced manipulations might be superfluous for something as simple as a textbox, but by treating it fundamentally the same as scenes, characters, and text, each could share large amounts of code, saving time and managing the engine's complexities very effectively. More power with more efficiency—the holy grail of any technological upgrade.  
  
And as this blog stands to witness, the more time passed, the more ways I came up with to utilize that power. But [feature creep isn't always a bad thing](https://lucasc.me/post/update-10-feature-creep-is-not-always-bad). VNgen far exceeded even the most ambitious elements of its original design document, but unlike Edge VN, not only did it hold up under major evolution, it _got better_. Rather than break down under pressure, VNgen's carefully-crafted foundation allowed it to compress and refine, proving and improving the formula on which it was made. That's not to say it was always easy moving forward—far from it—but it was rarely a question of whether or not a particular feature could be achieved, only how to achieve it.  
  
Laying the foundation may have been a long, hard journey in more ways than one, but it was here that things started to pay off. VNgen entered public Early Access in November of 2017, and through user feedback and intense standardization, finally became the VNgen you know today.  
  

## Onwards and Upwards

So, what's next?  
  
If there's one moral to this story, it's to never trust me with release dates. [VNgen is now here](https://xgasoft.itch.io/vngen), a nearly two-year development with two more years of gestation behind it, all of which was supposed to be done years ago. But it's a case of spending time to save time. I truly believe both Quantum and VNgen have bright futures ahead of them—not just for me, but for all creators out there.  
  
Indeed, where things go from here largely depends on you. With VNgen, I can sustainably create high production value content for low effort and minimal time. But losing entire years to poor health leaves an awful lot of catching up to do. Now that things are in a more manageable state, it's likely I will have to take more time away from development in order to provide for myself financially. I've been treating day-to-day development as a full time job because, for the past few years at least, that's all I've physically been able to do. In order for that to continue, I truly, truly need the support of the community.  
  

[![](/content/images/finding-success-in-failing-health-vngen/Patreonwordmark28navy29-1024x365.png)](/content/images/finding-success-in-failing-health-vngen/https://www.patreon.com/xgasoft)

  
If you value what I've created and want to see me keep on creating, please take a moment to consider [supporting me on Patreon](https://www.patreon.com/xgasoft). **If 1,000 people pledged only $1,** I'd be able to keep working on developer tools and consumer media alike full time. Even better, you'll get cool bonuses out of the deal and a direct line of communication to me and a community of other passionate folks that have helped me get where I am today.  
  
That being said, let me be clear: I fully intend to keep supporting VNgen and keep working on Yugure no Kagami regardless of funding. At this point, that's not really a concern. How quickly it happens and what comes next, on the other hand, depends entirely on Patreon.  
  
I appreciate your time and consideration! And if you've stuck with me through any part of this unexpectedly long journey, thanks as always for reading!
