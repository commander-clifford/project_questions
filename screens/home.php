<div id="mainQuest" class="main clearfix">
    <article id="" class="clearfix wrapper">
        <section class="cols2">
            <h2>Try it out, Ask a Question...</h2>
            <form name="quickQuest" id="quickQuest" method="post" action="index.php?page=XXXXXX">
                <fieldset>
                    <label for="qDecision">Decision</label>
                    <input class="biginput" type="text" name="qDecision" id="qDecision" size="40" maxlength="220" placeholder="Your Decision" autofocus />
                        <script>if (!("autofocus" in document.createElement("input"))) {document.getElementById("uName").focus();}</script>
                    <label for="qOption1">Option #1</label>
                    <input class="indent" type="text" name="qOption1" id="qOption1" size="30" maxlength="220" placeholder="Option #1" />
                    <label for="qOption2">Option #2</label>
                    <input class="indent" type="text" name="qOption2" id="qOption2" size="30" maxlength="220" placeholder="Option #2" />
                    <label for="qOption3">Option #3</label>
                    <input class="indent" type="text" name="qOption3" id="qOption3" size="30" maxlength="220" placeholder="Option #3" />
                    <label for="addAnOption" id="addAnOptionLabel" style="display:inline;">Add an Option</label>
                    <input class="indent" type="checkbox" name="addAnOption" id="addAnOption" >
                    <input type="submit" name="qDec" id="submit" class="submit clickButton" value="Generate" />
                </fieldset>

            </form>
        </section>
        <section class="cols2">
            <h2>Come to an Answer or Decision with some Help.</h2>
            <p>Hi, nice to meet you, we are Quested.  A new Social Decision Making Network.</p>
            <h4>Question, Share and Socialize.</h4>
            <a href="index.php?page=browse" class="clickButton">Browse</a>
        </section>
    </article>
</div>

<header class="spanBar regShadow testBox">
    <h2 class="wrapper centerText">Not just an answer generator, it's more personal than that!</h2>
</header>

<div class="main wrapper clearfix">
    <article class="clearfix ">
        <section class="cols3">
            <center>
            <h2 class="step-heading">Question</h2>
            <i class="icon-question-sign micons"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor.</p>
            </center>
        </section>
        <section class="cols3">
            <center>
            <h2 class="step-heading">Share</h2>
            <i class="icon-share micons"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor.</p>
            </center>
        </section>
        <section class="cols3">
            <center>
            <h2 class="step-heading">Socialize</h2>
            <i class="icon-group micons"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor.</p>
            </center>
        </section>
    </article>
</div>

<header class="spanBar regShadow">
    <h2 class="wrapper centerText">Making Decisions has never been so fun!</h2>
</header>

<div class="main wrapper clearfix">
    <article class="clearfix footer">

        <section class="cols2-3rd" style="margin-bottom:50px;">
            <img src="img/laptop.png">
        </section>
        
        <form id="qsignup" class="cols1-3rd">
            <legend>Sign Up</legend>
            <label for="username">Username</label>
            <input type="text" name="username" value="User Name">
            <label for="eMail">eMail</label>
            <input type="text" name="eMail" value="eMail">
            <label for="password">Password</label>
            <input type="text" name="password" value="Password">
            <input type="submit" name="signup" id="submit" class="submit clickButton" value="Sign Up" />
            <input type="submit" name="signup" id="fbsignup" class="submit clickButton" value="Facebook" />
        </form>
    </article>
</div>