<!--head-->
    <link rel="stylesheet" href="/css/colors/storage.css">
    <script src="/js/colors/Color.js" type="text/javascript"></script>
    <script src="/js/colors/storage/Storage.js" type="text/javascript"></script>
<!--/head-->

<!--contents-->
    <div id="wrap">
        <div id="user-profile">
            <div class="image">
                <img src="/images/<?=$owner->image ? "users/".$owner->image : "default-userprofile.png" ?>" alt="User-Profile">
            </div>
            <div class="info">
                <div class="user-info">
                    <span class="user-name"><?= $owner->user_name ?></span>
                    <span class="user-id">@<?= $owner->user_id ?></span>
                </div>
                <div class="tool-info<?=user() ? "" : " hidden"?>">
                    <button class="group-add">
                        <svg class="gUZ B9u U9O kVc" height="24" width="24" viewBox="0 0 24 24" aria-hidden="true" aria-label="" role="img"><path d="M22 10h-8V2a2 2 0 0 0-4 0v8H2a2 2 0 0 0 0 4h8v8a2 2 0 0 0 4 0v-8h8a2 2 0 0 0 0-4"></path></svg>
                    </button>
                    <button class="ml-1 option-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cog" class="svg-inline--fa fa-cog fa-w-16" role="img" viewBox="0 0 512 512"><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"/></svg>
                    </button>
                </div>
            </div>    
        </div>
        <hr>
    </div>
<!--/contents-->