<!--t Symbolic Links on Windows…the Easy Way! t-->
<!--tag 2012,archive,tech,thinkboxly,tutorials tag-->
<!--image /content/images/symbolic-links-on-windowsthe-easy-way/supply-chain1-1024x567.jpg image-->
  
For decades now, Linux users the world over have happily enjoyed themselves using symbolic links to increase productivity, make their computers easier to navigate, or squash certain location-related bugs in what they are trying to do. However, users of the more mainstream Windows persuasion have long been left out of the game, not realizing their computers are capable of such wizardry, or not knowing how to make use of it. What are these mysterious symbolic links, why are they so wonderful, and how can you use them yourself without having to be an IT pro? Check out the full post below to find out!  
  

## What are Symbolic Links?

  
Symbolic Links (often called ‘symlinks’, for short) can be thought of as advanced shortcuts. Only rather than open a program/file from another location (like a shortcut does), symlinks open files from other locations as if they were in the location of the symlink. In other words, you can have the data on your hard drive just once, but have that data appear in multiple locations, fully accessible at any of them.  
  

## Ok…why should I want them?

  
This will be easier to understand once you’ve actually worked with symlinks for a while. In fact, you may be working with them already! In July of 2009, Windows 7 officially introduced the Libraries system to the Windows world, creating a more efficient way to manage user documents, music, pictures, videos, and whatever else you see fit to create a Library for. Well, guess what? These Libraries are symbolic links! All of your favorite data is kept on your hard drive someplace like 'C:UsersAdministratorDocumentsRandomFolder', but if you want easier access to 'RandomFolder', all you have to do is make a Library for it and then its contents are accessible as 'LibrariesRandomFolderfilenamehere' and as an added bonus, it gets its own icon in a place that’s cleaner and more organized than the rest of the hard drive.  
  
A second benefit, which is probably more commonly taken advantage of in the Linux world, is the ability to split up programs without affecting their functionality. This can be useful for modular programs that make use of many plugins and addons which, for example, you’d really like to run off of your flash drive instead of your hard drive. The program itself doesn’t support migrating these plugins anywhere else, but by symlinking them from your flash drive to the program’s location, it can’t tell the difference.  
  
And there are many other uses for symlinks, too. As I said before, once you start to actually use them yourself, you’ll find all sorts of applications for the technology.  
  

## Sounds cool, but how can I do this?

  
Glad you asked! It turns out every edition of Windows since NT4 (basically any version that supports the NTFS file system) supports symlinking via command prompt, but this method is definitely not the fastest or most user friendly thing out there. [It got a bit easier with Windows Vista’s mklink command](http://www.howtogeek.com/howto/windows-vista/using-symlinks-in-windows-vista/), but still the feature is not everything it should be. If you want a truly practical solution capable of competing with the ease and effectiveness of Linux, then may I introduce you to [Link Shell Extension](http://schinagl.priv.at/nt/hardlinkshellext/linkshellextension.html) (free download available via link). As the name implies, this little program is an extension for the Windows Shell (explorer.exe) that allows you to create symlinks by simply right-clicking on your source file and then your destination and creating your symbolic link.  
  

#### 1\. Download

  
First, simply download the Visual C Redistributable and appropriate version of LSE to your computer and install the files (vcredist.exe first, then LinkShellExt.exe, both available from the LinkShellExtension website)  
  

#### 2\. Find Source

  
Once both installations are complete and you’ve either restarted just explorer.exe or your entire computer, you can browse for the file you want to link, right click, and choose the new “Pick Link Source” option available in the context menu.  
  
![](/content/images/symbolic-links-on-windowsthe-easy-way/http://schinagl.priv.at/nt/hardlinkshellext/picklinksource.png)  

#### 3\. Find Destination

  
For our last step, you’ll be introduced to an entire new branch of the context menu called “Drop As…”. This submenu will allow you to create a symbolic link from the source you picked earlier, in one of a few different forms depending on what kind of content you are attempting to link. If you aren’t sure what to choose, just go with dropping as a Hardlink, as this is basically the standard option and should do what you want in most situations.  
  
![](/content/images/symbolic-links-on-windowsthe-easy-way/http://schinagl.priv.at/nt/hardlinkshellext/drophardlinkfolder.png)  
And…that’s it! From now on, creating these sort of ‘advanced shortcuts’ is literally as easy as 1, 2, 3. The only problem you might have is feeling like something is missing every time you use another computer. Why Microsoft has failed to implement this kind of symlink creation into their OS by default is uncertain–symbolic linking is one of those little things that makes your life a lot easier in many ways. Once you’ve become used to creating symlinks, you won’t want to go back!  
  
[Also be sure to check out the program’s full tutorial on LSE’s website for much more detail on what can be done with symbolic links!](http://schinagl.priv.at/nt/hardlinkshellext/linkshellextension.html#introduction)
