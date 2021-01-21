<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sarah Standish</title>
    <link href="/it261/css/styles.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet"> 
</head>

<body>

    <?php
    include 'header.php';
    include 'nav.php';
    nav();
    echo $header;
    ?>
    <div class="main">
        <div class="photo">
            <img src = "/it261/images/IMG_2413_cropped.jpg" alt="photo of the student">
        </div>
        <div class="focus">
        <h2>Sarah Standish</h2>
        <p class="about">
            Sarah Standish grew up in Portland, Oregon and earned a B.A. in Asian and Middle Eastern Studies from Barnard College. She was the founding Arabic teacher of the first Arabic program at a public school in Oregon at Lincoln High School, where she taught from 2010-2014. She is also the Deputy Director of OneWorld Now!, a nonprofit after-school world language program for high school students. She is the author of <a href="https://www.goodreads.com/book/show/9643755-syria---culture-smart" target="_blank"><em>Syria - Culture Smart!</em></a> and the forthcoming <a href="https://jusuurtextbook.com/" target="_blank"><em>Jusuur 1: Beginning Communicative Arabic</em></a> textbook (expected publication spring 2022).
            <br><br>
            In her free time, she enjoys reading, cooking, biking,  learning web development, and coding.
        </p>
        </div>
    <aside>
        <h2>Learn More</h2>
        <ul>
            <li><a href="https://www.goodreads.com/book/show/9643755-syria---culture-smart" target="_blank">Syria - Culture Smart!</a></li>
            <li><a href="https://jusuurtextbook.com/" target="_blank">Jusuur 1: Beginning Communicative Arabic</a></li>
            <li><a href="https://github.com/sarahstandish/" target="_blank">GitHub</a></li>
            <li><a href="https://www.linkedin.com/in/sarahstandish/" target="_blank">LinkedIn</a></li>
            <li><a href="https://oneworldnow.org/" target="_blank">OneWorld Now!</a></li>

        </ul>
        <h2>Sarah's Recommendations</h2>
        <ul>
            <li>Book: <a href="https://www.goodreads.com/book/show/41160292-exhalation" target="_blank"><em>Exhalation</em> by Ted Chiang</a></li>
            <li>Podcast: <a href="https://www.earhustlesq.com/" target="_blank">Ear Hustle</a></li>
            <li>App: <a href="https://www.youneedabudget.com/" target="_blank">You Need a Budget</a></li>
            <li>Blog: <a href="https://sccinsight.com/" target="_blank">Seattle City Council Insight</a></li>
        </ul>
    </aside>
    </div>
    <?php
    include 'footer.php';
    footer("");
    ?>


</body>

</html> 