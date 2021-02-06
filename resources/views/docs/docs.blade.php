<x-AldrumoCom::docs-layout>
    <h1>Hello World</h1>
    <p>Welcome to 2017! This post may seem obvious to most but it’s something that caught me out when recently dealing the DateTime class and DateTimeZone class.</p>

    <p>When dealing with timezones in an application it’s usually wise to store the date / timestamp converted into the UTC timezone. From here you can then transform it to whatever timezone a user needs to see when displaying on the screen. This is especially handy when dealing with multiple users in multiple timezones, you can simply retrieve the date from the database and you know it’s in UTC timezone, you can then transform it into what you need. Whereas if you store it in the timezone of the user that entered the date, you are opening yourself to a massive world of pain with having to track a timezone with each date stored so you are able to correctly convert to and from the needed timezones.</p>

    <p>Recently I’ve been workng on my open source calendar / event package <a href="http://github.com/mikebarlow/mycal">MyCal</a> and in doing so I had a part of code where I had an instance of the DateTime class with an American timezone which you would setup like so</p>

    <div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>$DateTime = new \DateTime(
                '2017-01-25 21:50:00',
                new \DateTimeZone(
                    'American/New_York'
                )
            );
            </code></pre></div></div>

    <p>Once I had this, I was wanting to obtain the timestamp for this time to do some comparisons and this is where I was stumped at why it was failing. After some debugging and “echoing” out of dates I had something like this</p>

    <div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>$DateTime = new \DateTime(
                '2017-01-25 21:00:00',
                new \DateTimeZone(
                    'American/New_York'
                )
            );

            echo $DateTime-&gt;format('Y-m-d H:i');
            // '2017-01-25 21:00'

            echo date('Y-m-d H:i', $DateTime-&gt;getTimestamp());
            // '2017-01-26 02:00'
            </code></pre></div></div>

    <p><em>“Whaaaaaaa? how is the timestamp for the given date a good few hours out.”</em> Was my first response. It’s only when you take a step back, think about what’s going on and realise that you are requesting the Unix Timestamp of the date that you notice that it’s simply auto converted the timestamp back into UTC before returning it.</p>

    <p>Once you beging to think about it, it makes perfect sense given it’s a Unix Timestamp but at the time when I was in the “moment” it really threw me off as I was expecting the result from <code class="language-plaintext highlighter-rouge">$DateTime-&gt;format()</code> and <code class="language-plaintext highlighter-rouge">date()</code> to match.</p>

    <p>The bonus of this, means it does make working with timezones in an application so much easier as when you are accepting dates from a registered user (one that has a timezone associated with them), you can quite easily get the UTC timestamp from their input ready to save in your data store with some code similar to this brief example.</p>

    <div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>// ... sanitize $_POST['date_time'] before setting
            $selectedDate = $_POST['date_time'];

            // And assuming all users settings have been retrieved and stored to $userSettings object

            $EventDate = new \DateTime(
                $selectedDate,
                new \DateTimeZone($userSettings-&gt;timezone)
            );

            $Statement = $PDO-&gt;prepare("INSERT INTO event(event_date) VALUES(:event_date)");
            $Statement-&gt;execute(['event_date' =&gt; $EventDate-&gt;getTimestamp()]);
            </code></pre></div></div>

    <p>Obviously that’s a rough example but hopefully it conveys the idea and hopefully this post prevents someone else making the stupid mistake that I made!</p>
</x-AldrumoCom::docs-layout>
