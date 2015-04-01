<?php

include "inc/functions.php";

$body = <<<EOT
<style>img{max-width:100%}</style>
<div class="ban">
<h2>Czym jest 8ch.pl?</h2>
<p>8ch.pl jest polskim klonem boardu 8ch.net (używamy ich silnika, infinity), sponsorowanym przez organizację <a href='http://chanowa.org/'>Chanowa.ORG</a>. 

<h2>Jakie są związki 8ch.pl z Chanowa.ORG?</h2>
<p>Chanowa.ORG zapewnia nam wsparcie techniczne, administracyjne, serwerowe oraz prawne.

<h2>What is an imageboard?</h2>
<p>An imageboard is a type of internet forum which lets users post text and images anonymously (without name) about any topic, or no topic at all. Unlike forums, imageboards do not hold old content permamently, and old threads are pruned as new ones are created.</p>
 
<p>The imageboard format holds several advantages against traditional forums:</p>
<ol>
<li>There is no registration process, which allows for anyone to post what they like without having to jump through hoops.</li>
<li>Users do not have names and thus feel no reason to build up an identity or reputation for themselves. Post are judged based on their content rather than who made them.</li>
<li>sharing images and multimedia content is as easy as saving and uploading it to the site.</li>
</ol>

<h2>How is 8chan run?</h2>
<p>8chan is a service that hosts a large selection of imageboards to browse. These boards are maintained by their respective board owners, who are not affiliated with the 8chan global staff.</p>
<p>The 8chan global staff are responsible for maintaining the site as a whole and protecting it from spam and illegal content. The administration  is NOT responsible for enforcing any rules outside of the global rule. Any complaints about the content or management of a board should be addressed towards the owner of the board, unless it violates the law of the United States of America, or global policy.</p>

<h2>How do I post a new thread?</h2>
<p>Navigate to the board you would like to post on, fill out the post form, and click "New Thread". On many boards, you are required to upload an image, but if you do not have one you can also draw a picture by clicking "Oekaki". No boards require you to fill out a name or email address.</p>
<img src="/static/faq/new-thread.png" alt="New thread FAQ">

<h2>How do I comment on a thread?</h2>
<p>On 8chan, threads are ordered by newest to oldest and have no "score" like on other websites. There are no upvotes or "Like" buttons. This allows even unpopular opinions to rise to the top. The replies in threads are ordered oldest to newest and similarly have no score.</p>
<p>To reply to a thread, click [Reply] on any thread on a board's index.</p>
<img src="/static/faq/new-reply.png" alt="New thread FAQ">

<p>Fill out your reply. Only the "Comment" field is required for replies on all boards.</p>
<img src="/static/faq/new-reply2.png" alt="New thread FAQ">

<p>Your reply will be highlighted on the page.</p>
<img src="/static/faq/new-reply3.png" alt="New thread FAQ">

<h2>How do I reply to another poster?</h2>
<p>Click the number of their post. A reply box will open automatically prepopulated with the post number you're replying to. Write your post under their post number. Similarly, when people reply to you, it will show (You) after the post number as a hint.</p>
<img src="/static/faq/new-reply4.png" alt="New thread FAQ">


<h2>Are there any global rules regarding content?</h2>
<p>Only one:</p>
<ul>
<li>Do not post, request, or link to any content illegal in the United States of America. Do not create boards with the sole purpose of posting or spreading such content.</li>
</ul>
<p>Other than that, you are free to institute whatever rules you want on your board.</p>
<p><a href="/obscenity.html">More information about US obscenity laws and how they relate to 8chan boards</a></p>
<p><a href="/dost.html">More information about the Dost test</a></p>
<p><a href="/personhood.html">Just who is this 8chan person anyway?</a></p>
<h2>How do I add more volunteers?</h2>
<p>You may do this in your board settings, click on "Edit board volunteers".
<h2>How do I manage my board?</h2>
<p>Go to <a href="/mod.php">the volunteer panel</a> and click on the board link for your board.</p>
<h2>How do I contact the admin?</h2>
<p>The admin can be reached at <tt>admin at 8chan dot co</tt>.</p>

<h2>What's your privacy policy?</h2>
<p>Find it <a href="/privacy.pdf">here</a>.</p>

<h2>Help! My board has been deleted!</h2>
<p>As of November 13th, 2014, board expiration no longer occurs.</p>

<p>You still may lose access to your board, however, if you fail to log in for two weeks or it receives no posts for a week. See <a href="/claim.html">here</a> for a list of boards that are available for reclaiming.</p>

<h2>How do I post as a volunteer on my board?</h2>
<p>Make sure you are using the volunteer interface to view your board. The URL of your browser should be <a href="/mod.php?/yourboard"><tt>https://8ch.net/mod.php?/yourboard</tt></a>.</p>

<p>If you are the owner of the board, put "## Board Owner" in the name field. If someone else is the owner and you are just assisting them, put "## Board Volunteer" in the name field. Write your post and click "Reply". It will appear with your capcode.</p>
<h2>Help! The owner of X board is doing something I don't like!</h2>
<p>If they aren't doing anything illegal, I can't help you. I don't dictate how board owners should manage their boards.</p>
<p>If they are doing something illegal, email me.</p>

<h2>Can you give me X board?</h2>
<p>If the owner of the board is inactive or the board is broken due to bad CSS, sure. Send me an email. You can see a list of boards that qualify for being taken over <a href="/claim.html">here</a>.</p>

<h2>Can you add some new feature?</h2>
<p>Open a <a href="https://github.com/ctrlcctrlv/8chan/issues">Github issue</a>. Better yet, write it yourself and open a pull request.

<h2>What is "sage"?</h2>
<p>Posters may reply to threads without bumping them to the top of the index by putting "sage" in the email field.</p>

<h2>What is a tripcode?</h2>
<p>Most posts on 8chan are made anonymously, but this is not the only way to post. The name field can be used <em>four</em> ways to establish identity:</p>
<ol>
<li>By simply writing a name in the box. This is insecure as any other poster can write the same name.</li>
<li>By writing a # character and then a password. Putting #example in the name field would become !KtW6XcghiY. This is reasonably secure, but with increasing GPU speeds these tripcodes can be cracked in a few days by a dedicated attacker.</li>
<li>By writing two # characters and then a password. Putting ##example in the name field would become !!Dz.MSNRw9M. This is quite secure, but it relies on a secret salt on the server so the code will not work on sites other than 8chan.</li>
<li>Board owners and volunteers can enter the special codes "## Board Owner" and "## Board Volunteer" which become <em>capcodes</em> that display after the name. The 8chan administrator can type "## Admin" which becomes <span class="capcode" title="This post was written by the global 8chan administrator."> <i class="fa fa-wheelchair" style="color:blue;"></i> <span style="color:red">8chan Administrator</span></span>.</li>
</ol>
<p>Please note, many boards on 8chan have an option set called "Forced anonymity" which causes the name field to not work. This is because many users (and therefore board owners) do not like tripcode users.</p>

<h2>How do I format my text?</h2>
<ul>
<li>**spoiler** or [spoiler]spoiler[/spoiler] -&gt; spoiler</li>
<li>''italics'' -&gt; <em>italics</em></li>
<li>'''bold''' -&gt; <strong>bold</strong></li>
<li>__underline__ -&gt; <u>underline</u></li>
<li>==heading== -&gt; <span class='heading'>heading</span> (must be on own line)</li>
<li>~~strikethrough~~ -&gt; <s>strikethrough</s></li>
<li>[aa] tags for ASCII/JIS art (escape formatting)</li>
<li>[code] tags if enabled by board owner</li>
<li>$$ and \( \) LaTeX tags if enabled by board owner</li>
</ul>

<h2>How are featured boards chosen?</h2>
<p>Top twenty-five boards excluding /meta/, /b/, /operate/, /boards/ and /news+/.</p>

<h2>Who owns boards like /b/, /news+/ and /operate/?</h2>
<p>No one, so they are <em>de facto</em> managed by the administration.</p>

<h2>Why does <a href="/banned">https://8ch.net/banned</a> say that I'm banned? I can still use the boards?</h2>
<p>8chan is centered around user created boards. That's a board with CSS that makes it look like the ban page, not an official page. You've been tricked. 8chan has no official ban check page.</p>

<h2>Where's the mobile app?</h2>
<p>There is no official mobile app, however there is an unofficial Android app at <a href="https://github.com/wingy/Exodus/releases">wingy/Exodus</a>.</p>

<p>I don't provide support for this app, ask the developer of it if you have a problem with it.</p>

<h2>Can I have a list of all API endpoints for getting raw data from 8chan?</h2>
<p>
Assuming the /b/ board, they are as follows:</p>
<ul>
	<li><a href="https://8ch.net/b/index.rss">https://8ch.net/b/index.rss</a> - RSS formatted index so that you can watch smaller boards and get updates when they get new posts using a feed reader like Thunderbird or Feedly.</li>
	<li><a href="https://8ch.net/b/0.json">https://8ch.net/b/0.json</a> - Index of all threads on page 0 of /b/.</li>
	<li><a href="https://8ch.net/b/res/1.json">https://8ch.net/b/res/1.json</a> - All replies of thread 1 on /b/.</li>
	<li><a href="https://8ch.net/b/threads.json">https://8ch.net/b/threads.json</a> - Thread index of all 15 pages of /b/.</li>
</ul>

<p>There are also endpoints for getting information about 8chan's boards:</p>

<ul>
	<li><a href="https://8ch.net/boards.json">https://8ch.net/boards.json</a> - Boards on 8chan (warning, 1MB+)</a></li>
	<li><a href="https://8ch.net/settings.php?board=b">https://8ch.net/settings.php?board=b</a> - Board settings of /b/ (JSON format)</li>
</ul>
<p>Just read the data to get an idea of what is exposed and under what attribute names. It should be self explanatory.</p>
<p><strong>Endpoints not listed here, like post.php, catalog.json or boards-top20.json are subject to change or removal at any time!</strong></p>

</div>

EOT;

echo Element("page.html", array("config" => $config, "body" => $body, "title" => "FAQ"));
