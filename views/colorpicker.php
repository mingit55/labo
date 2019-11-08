<!-- head -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="/css/color.css">
<script src="./js/Style.js" type="text/javascript"></script>
<script src="./js/Viewer.js" type="text/javascript"></script>
<script src="./js/Canvas.js" type="text/javascript"></script>
<script src="./js/Cursor.js" type="text/javascript"></script>
<script src="./js/ColorPicker.js" type="text/javascript"></script>
<script src="./js/Tags.js" type="text/javascript"></script>
<script type="/js/color.js"></script>
<!-- /head -->

<!-- contents -->
<div class="wrapper">
    <div class="header">
        <img src="images/Tlogo.png" alt="logo" height="30">
        <ul class="nav middle">
            <li><a href="#" class="active">조합기</a></li>
            <li><a href="#">검색창</a></li>
            <li><a href="#">보관함</a></li>
            <!-- <li><a href="#">메뉴4</a></li> -->
        </ul>
        <ul class="nav right">
            <li><a href="#" data-tooltip-text="로그인">로그인</a></li>
            <!-- <li><a href="#" data-tooltip-text="로그아웃">로그아웃</a></li> -->
            <li><a href="#" data-tooltip-text="회원가입">회원가입</a></li>
            <li><a href="#" data-tooltip-text="이용안내">이용안내</a></li>
            <li><a href="#" data-tooltip-text="고객센터">고객센터</a></li>
        </ul>
    </div>
    <div class="contents">
        <div class="option-tab">
            <div class="option">
                <input type="radio" id="type-auto" name="type" value="1" checked>
                <label for="type-auto">자동 선택</label>
                <label for="type-auto" class="radio">
                    <div></div>
                </label>
            </div>
            <div class="option">
                <input type="radio" id="type-passive" name="type" value="0">
                <label for="type-passive">수동 선택</label>
                <label for="type-passive" class="radio">
                    <div></div>
                </label>
            </div>
        </div>
        <div id="colorPicker"></div>

        <p class="help-message">
            자유롭게 당신의 색을 표현할 수 있는 태그를 작성해 보세요!
        </p>
        <div id="tag-box">
            <div class="input-box">
                <span class="prefix">#</span>
                <input type="text" class="output" hidden>
                <input type="text" class="input" placeholder="봄_느낌">    
            </div>
        </div>
        <button id="submit">저장하기</button>
    </div>
    <div class="container">
        <ul>
            <li class="box">
                <div class="color-box FF8087"></div>
                <ul class="code-box">
                    <li class="HEX">
                        #<input type="text" value="FF8087" maxlength="6" class="hex" spellcheck="false">
                    </li>
                    <li class="R">
                        R :<input type="text" value="255" maxlength="3" class="rgba">
                    </li>
                    <li class="G">
                        G :<input type="text" value="128" maxlength="3" class="rgba">
                    </li>
                    <li class="B">
                        B :<input type="text" value="135" maxlength="3" class="rgba">
                    </li>
                    <li class="brightness">
                        <canvas></canvas>
                        <div class="select"></div>
                    </li>
                </ul>
            </li>

            <li class="box">
                <div class="color-box E874B4"></div>
                <ul class="code-box">
                    <li class="HEX">
                        #<input type="text" value="E874B4" maxlength="6" class="hex" spellcheck="false">
                    </li>
                    <li class="R">
                        R :<input type="text" value="232" maxlength="3" class="rgba">
                    </li>
                    <li class="G">
                        G :<input type="text" value="116" maxlength="3" class="rgba">
                    </li>
                    <li class="B">
                        B :<input type="text" value="190" maxlength="3" class="rgba">
                    </li>
                    <li class="brightness">
                        <canvas></canvas>
                        <div class="select"></div>
                    </li>
                </ul>
            </li>

            <li class="box">
                <div class="color-box E874B4"></div>
                <ul class="code-box">
                    <li class="HEX">
                        #<input type="text" value="E874B4" maxlength="6" class="hex" spellcheck="false">
                    </li>
                    <li class="R">
                        R :<input type="text" value="232" maxlength="3" class="rgba">
                    </li>
                    <li class="G">
                        G :<input type="text" value="116" maxlength="3" class="rgba">
                    </li>
                    <li class="B">
                        B :<input type="text" value="190" maxlength="3" class="rgba">
                    </li>
                    <li class="brightness">
                        <canvas></canvas>
                        <div class="select"></div>
                    </li>
                </ul>
            </li>

            <li class="box">
                <div class="color-box FB8CFF"></div>
                <ul class="code-box">
                    <li class="HEX">
                        #<input type="text" value="FB8CFF" maxlength="6" class="hex" spellcheck="false">
                    </li>
                    <li class="R">
                        R :<input type="text" value="251" maxlength="3" class="rgba">
                    </li>
                    <li class="G">
                        G :<input type="text" value="140" maxlength="3" class="rgba">
                    </li>
                    <li class="B">
                        B :<input type="text" value="255" maxlength="3" class="rgba">
                    </li>
                    <li class="brightness">
                        <canvas></canvas>
                        <div class="select"></div>
                    </li>
                </ul>
            </li>

            <li class="box">
                <div class="color-box C474E8"></div>
                <ul class="code-box">
                    <li class="HEX">
                        #<input type="text" value="C474E8" maxlength="6" class="hex" spellcheck="false">
                    </li>
                    <li class="R">
                        R :<input type="text" value="196" maxlength="3" class="rgba">
                    </li>
                    <li class="G">
                        G :<input type="text" value="116" maxlength="3" class="rgba">
                    </li>
                    <li class="B">
                        B :<input type="text" value="232" maxlength="3" class="rgba">
                    </li>
                    <li class="brightness">
                        <canvas></canvas>
                        <div class="select"></div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- <img class="phone" src="images/phone.png" alt="phone" width="300"> -->
    <!-- <img class="hand" src="images/hand.jpg" alt="hand" width="600"> -->
</div>
<!-- /contents -->