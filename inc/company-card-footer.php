<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<nav class="c-cardbtn">
    <ul class="c-cardbtn--list">
        <li class="c-cardbtn--item">
            <a href="/message/" class="c-cardbtn--link <?php if ($str[1] == "message") { echo ' c-cardbtn--link__active '; } ?>">代表ごあいさつ
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="" class="c-cardbtn--link">会社概要
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="" class="c-cardbtn--link">沿　革
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="" class="c-cardbtn--link">ISO認証取得
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="" class="c-cardbtn--link">有資格者
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="" class="c-cardbtn--link">営業拠点
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="" class="c-cardbtn--link">環境方針
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
    </ul>
</nav>