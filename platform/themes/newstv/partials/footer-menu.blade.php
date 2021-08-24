<?php
?>



@if(app()->getLocale()=='en')
    {!!
  Menu::renderMenuLocation('footer-menu', [
                'options' => ['class' => ''],
                 'theme' => true,
                 'view' => 'custom-menu',
                                       ])
 !!}
@elseif(app()->getLocale()=='ar')

    <ul class=" ">

        <li class="   ">
            <a href="/about-us" target="_self">
                من نحن
            </a>
        </li>
        <li class="   ">
            <a href="/campaigns" target="_self">
                الحملات
            </a>
        </li>
        <li class="   ">
            <a href="/projects" target="_self">
                المشاريع
            </a>
        </li>
        <li class="   ">
            <a href="/news" target="_self">
                الأخبار
            </a>
        </li>
        <li class="   b0  ">
            <a href="/contact-us" target="_self">
                اتصل بنا
            </a>
        </li>
    </ul>
@endif
