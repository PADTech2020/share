<?php
?>
@if(app()->getLocale()=='en')

    {!!
     Menu::renderMenuLocation('main-menu', [
                   'options' => ['class' => 'nav navbar-nav'],
                    'theme' => true,
                    'view' => 'main-menu',
                                          ])
    !!}
@elseif(app()->getLocale()=='ar')

    <ul class="nav navbar-nav">

        <li class="menu-item ">
            <a href="/" target="_self">
                الرئيسية
            </a>
        </li>
        <li class="menu-item ">
            <a href="/about" target="_self">
                من نحن
            </a>
        </li>
        <li class="menu-item   ">
            <a href="/campaigns" target="_self">
                حملاتنا
            </a>
        </li>
        <li class="menu-item   ">
            <a href="/projects" target="_self">
                مشاريعنا
            </a>
        </li>
        <li class="menu-item   ">
            <a href="/all/news" target="_self">
                الأخبار
            </a>
        </li>
        <li class="menu-item  ">
            <a href="/contact" target="_self">
                اتصل بنا
            </a>
        </li>
    </ul>
@endif
