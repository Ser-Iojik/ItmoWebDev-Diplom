
<section class="rowBlock2" id="ProductAndPrice">


<div class="column">
    <div class="models">
        <div class="rowBlock2_Text">
            <h3>Мы предлагаем только <span>надежные и проверенные  стабилизаторы!</span></h3>
        </div>
        <div class="show row rowBlockModels col-12">

            <a href="modelnorma" class="col-2 active tab1">
                <span>NORMA</span>            
            </a>

            <a href="modelnormaexc" class="col-2 tab2">
                <span>NORMA Exc</span>
            </a>
            <a href="modelinfinity" class="col-2">
                <span>INFINITY</span>
            </a>
            <a href="modeloptimum" class="col-2">
                <span>OPTIMUM</span>
            </a>
            <a href="modelstandart" class="col-2">
                <span>STANDART</span>
            </a>
            <a href="modelprime" class="col-2">
                <span>PRIME</span>
            </a>
            <a href="modeltop" class="col-2">
                <span>TOP</span>
            </a>
            <a href="modeluniversal" class="col-2">
                <span>UNIVERSAL</span>
            </a>
        </div>
        <div class="hide row col-12 column-center">
            <div class="row rowBlockModels col-6 row-center">
                <a href="modelnorma" class="col-2 active">
                    <span>NORMA</span>
                </a>
                <a href="modelnormaexc" class="col-2">
                    <span>NORMA Exc</span>
                </a>
                <a href="modelinfinity" class="col-2">
                    <span>INFINITY</span>
                </a>
                <a href class="col-2">
                    <span>OPTIMUM</span>
                </a>
            </div>
            <div class="row rowBlockModels col-6 row-center">
                <a href class="col-2">
                    <span>STANDART</span>
                </a>
                <a href class="col-2">
                    <span>PRIME</span>
                </a>
                <a href class="col-2">
                    <span>TOP</span>
                </a>
                <a href class="col-2">
                    <span>UNIVERSAL</span>
                </a>
            </div>
        </div>
    </div>

    <div class="row slider multiple-items sliderContainer normaSlider showSlider">

<?
// вычислим количество приборов в данной модели
 //   $q = mysql_query("SELECT count(*) FROM `article` WHERE `Model` LIKE '$model' ") or die(mysql_error());
 //   $a = mysql_fetch_row($q); $count= $a[0];


    $sql = "SELECT `Name`, `Power`, `Image_1`, `Unom`, `Umax`, `Percent`, `Cost`, `Name_small` FROM `article` WHERE `Model` LIKE '$model'";
 //   echo $sql;
    $q = mysql_query($sql) or die(mysql_error());
//    $a = mysql_fetch_row($q);
    
while($a = mysql_fetch_row($q)) 
{     
    
//echo "<pre>"; print_r($a); echo "</pre>";

?>


        <div class="productSlide">
            <div class="productItem">
                <div class="pItemImgWrap">
                    <div class="pItemImg">
                        <img src="<? echo $a[2]; ?>" alt="Газовый генератор Briggs &amp; Stratton" title="Газовый генератор Briggs &amp; Stratton">
                    </div>
                </div>
                <div class="column">
                    <div class="pBrandName">
                        <? echo $a[0]; ?>
                    </div>
                    <div class="pDescWrap">
                        <div class="pDescItem pDescItemAft">
                            <span class="desc">Мощность:</span><span><? echo $a[1]; ?></span> кВт
                        </div>
                        <div class="pDescItem pDescItemAft">
                            <span class="desc">Входное напряжение:</span><span><?php echo $a[3]; ?></span> В
                        </div>
                        <div class="pDescItem">
                            <span class="desc">Точность стабилизации:</span><span><? echo $a[5]; ?></span> %
                        </div>
                    </div>
                    <div class="pDescItemCost pDescItemCostAft">
                        <span class="desc">Цена:</span><span><? echo $a[6]; ?></span> р
                    </div>
                    <div class="pBtnWrap">
                        <a href="#openModalRequest"class="btnOrange">
                            <span>Оставить заявку</span>
                        </a>
                                          
                        <div class="buttonDemo">
                            <a href="#openModal"><!-- <?echo $a[7];?> -->
                                <div class="demo">О товаре</div>
                                <img class="set" src="img/settings.png" alt="">
                                <div class="disc">Смотреть</div>
                            </a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?

}

?>

    </div>

<!--     <div class="row slider multiple-items sliderContainer normaExcSlider hideSlider">

        <div class="productSlide">
                <div class="productItem">
                    <div class="pItemImgWrap">
                        <div class="pItemImg">
                            <img src="<? echo $a[3]; ?>" alt="Газовый генератор Briggs &amp; Stratton" title="Газовый генератор Briggs &amp; Stratton">
                        </div>
                    </div>
                    <div class="column">
                        <div class="pBrandName">
                            <? echo $a[1]; ?>
                        </div>
                        <div class="pDescWrap">
                            <div class="pDescItem pDescItemAft">
                                <span class="desc">Мощность:</span><span><? echo $a[2]; ?></span> кВт
                            </div>
                            <div class="pDescItem pDescItemAft">
                                <span class="desc">Входное напряжение:</span><span><?php echo $a[6]; ?></span> В
                            </div>
                            <div class="pDescItem">
                                <span class="desc">Точность стабилизации:</span><span><? echo $a[7]; ?></span> %
                            </div>
                        </div>
                        <div class="pDescItemCost pDescItemCostAft">
                            <span class="desc">Цена:</span><span><? echo $a[8]; ?></span> р
                        </div>
                        <div class="pBtnWrap">
                            <a href="#openModalRequest"class="btnOrange">
                                <span>Оставить заявку</span>
                            </a>
                                            
                            <div class="buttonDemo">
                                <a href="#openModal">
                                    <div class="demo">О товаре</div>
                                    <img class="set" src="img/settings.png" alt="">
                                    <div class="disc">Смотреть</div>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="productSlide">
                <div class="productItem">
                    <div class="pItemImgWrap">
                        <div class="pItemImg">
                            <img src="<? echo $a[3]; ?>" alt="Газовый генератор Briggs &amp; Stratton" title="Газовый генератор Briggs &amp; Stratton">
                        </div>
                    </div>
                    <div class="column">
                        <div class="pBrandName">
                            <? echo $a[1]; ?>
                        </div>
                        <div class="pDescWrap">
                            <div class="pDescItem pDescItemAft">
                                <span class="desc">Мощность:</span><span><? echo $a[2]; ?></span> кВт
                            </div>
                            <div class="pDescItem pDescItemAft">
                                <span class="desc">Входное напряжение:</span><span><?php echo $a[6]; ?></span> В
                            </div>
                            <div class="pDescItem">
                                <span class="desc">Точность стабилизации:</span><span><? echo $a[7]; ?></span> %
                            </div>
                        </div>
                        <div class="pDescItemCost pDescItemCostAft">
                            <span class="desc">Цена:</span><span><? echo $a[8]; ?></span> р
                        </div>
                        <div class="pBtnWrap">
                            <a href="#openModalRequest"class="btnOrange">
                                <span>Оставить заявку</span>
                            </a>
                                            
                            <div class="buttonDemo">
                                <a href="#openModal">
                                    <div class="demo">О товаре</div>
                                    <img class="set" src="img/settings.png" alt="">
                                    <div class="disc">Смотреть</div>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="productSlide">
                <div class="productItem">
                    <div class="pItemImgWrap">
                        <div class="pItemImg">
                            <img src="<? echo $a[3]; ?>" alt="Газовый генератор Briggs &amp; Stratton" title="Газовый генератор Briggs &amp; Stratton">
                        </div>
                    </div>
                    <div class="column">
                        <div class="pBrandName">
                            <? echo $a[1]; ?>
                        </div>
                        <div class="pDescWrap">
                            <div class="pDescItem pDescItemAft">
                                <span class="desc">Мощность:</span><span><? echo $a[2]; ?></span> кВт
                            </div>
                            <div class="pDescItem pDescItemAft">
                                <span class="desc">Входное напряжение:</span><span><?php echo $a[6]; ?></span> В
                            </div>
                            <div class="pDescItem">
                                <span class="desc">Точность стабилизации:</span><span><? echo $a[7]; ?></span> %
                            </div>
                        </div>
                        <div class="pDescItemCost pDescItemCostAft">
                            <span class="desc">Цена:</span><span><? echo $a[8]; ?></span> р
                        </div>
                        <div class="pBtnWrap">
                            <a href="#openModalRequest"class="btnOrange">
                                <span>Оставить заявку</span>
                            </a>
                                            
                            <div class="buttonDemo">
                                <a href="#openModal">
                                    <div class="demo">О товаре</div>
                                    <img class="set" src="img/settings.png" alt="">
                                    <div class="disc">Смотреть</div>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="productSlide">
                <div class="productItem">
                    <div class="pItemImgWrap">
                        <div class="pItemImg">
                            <img src="<? echo $a[3]; ?>" alt="Газовый генератор Briggs &amp; Stratton" title="Газовый генератор Briggs &amp; Stratton">
                        </div>
                    </div>
                    <div class="column">
                        <div class="pBrandName">
                            <? echo $a[1]; ?>
                        </div>
                        <div class="pDescWrap">
                            <div class="pDescItem pDescItemAft">
                                <span class="desc">Мощность:</span><span><? echo $a[2]; ?></span> кВт
                            </div>
                            <div class="pDescItem pDescItemAft">
                                <span class="desc">Входное напряжение:</span><span><?php echo $a[6]; ?></span> В
                            </div>
                            <div class="pDescItem">
                                <span class="desc">Точность стабилизации:</span><span><? echo $a[7]; ?></span> %
                            </div>
                        </div>
                        <div class="pDescItemCost pDescItemCostAft">
                            <span class="desc">Цена:</span><span><? echo $a[8]; ?></span> р
                        </div>
                        <div class="pBtnWrap">
                            <a href="#openModalRequest"class="btnOrange">
                                <span>Оставить заявку</span>
                            </a>
                                            
                            <div class="buttonDemo">
                                <a href="#openModal">
                                    <div class="demo">О товаре</div>
                                    <img class="set" src="img/settings.png" alt="">
                                    <div class="disc">Смотреть</div>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div> -->

</div>

</section>