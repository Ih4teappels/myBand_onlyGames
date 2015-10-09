<header>
    <h2>Only Games</h2>
    <div id="navbar">



        <ul>
            <li {if $curr_page eq ""}class="selected"{/if}><a href="index.php">News</a></li>
            <li {if $curr_page eq "tournaments"}class="selected"{/if}><a href="?page=tournaments">Tournaments</a></li>
            <li {if $curr_page eq "socialmedia"}class="selected"{/if}><a href="?page=socialmedia">Social Media Posts</a></li>
            <li {if $curr_page eq "about"}class="selected"{/if}><a href="?page=about">Contact</a></li>
        </ul>

    </div>

</header>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="container-fluid">
    <div class="row">