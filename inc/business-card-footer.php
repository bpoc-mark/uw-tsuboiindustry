<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<nav class="c-cardbtn c-cardbtn--business">
    <ul class="c-cardbtn--list">
        <li class="c-cardbtn--item">
            <a href="/consulting/" class="c-cardbtn--link <?php if ($str[1] == "consulting") { echo ' c-cardbtn--link__active '; } ?>">総合設備コンサルティング
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/clean-room/" class="c-cardbtn--link <?php if ($str[1] == "clean-room") { echo ' c-cardbtn--link__active '; } ?>">クリーンルーム
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/air-conditioning/" class="c-cardbtn--link <?php if ($str[1] == "air-conditioning") { echo ' c-cardbtn--link__active '; } ?>">空調換気設備工事
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/cold-equipment/" class="c-cardbtn--link <?php if ($str[1] == "cold-equipment") { echo ' c-cardbtn--link__active '; } ?>">冷熱設備工事
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/plumbing-sanitation/" class="c-cardbtn--link <?php if ($str[1] == "plumbing-sanitation") { echo ' c-cardbtn--link__active '; } ?>">給排水衛生工事
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/others/" class="c-cardbtn--link <?php if ($str[1] == "others") { echo ' c-cardbtn--link__active '; } ?>">その他工事
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
        <li class="c-cardbtn--item">
            <a href="/after-maintenance/" class="c-cardbtn--link <?php if ($str[1] == "after-maintenance") { echo ' c-cardbtn--link__active '; } ?>">点検・修理・メンテナンス
                <span class="c-cardbtn--arrow"><img src="/images/common/arrow_icon.svg" alt=""></span>
            </a>
        </li>
    </ul>
</nav>