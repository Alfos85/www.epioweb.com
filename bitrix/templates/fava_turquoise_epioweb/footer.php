            </div><!--content-->

            <?if($APPLICATION->GetCurDir() == SITE_DIR."about/"):?>
            <div class="right-content">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                     	"AREA_FILE_SHOW" => "page",
                     	"AREA_FILE_SUFFIX" => "incright",
                     	"EDIT_TEMPLATE" => "standard.php"
                    )
                );?>
            </div>
            <div class="clear-both"></div>
            <?endif;?>
        </div><!--content-wrapper-->
        <!-- BOTTOM -->
        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "incbot",
	"EDIT_TEMPLATE" => "standard.php"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>
        <!--FOOTER-->
        <div id="footer">
            <div class="footer-left">
                <span class="copy">
                 	<?$APPLICATION->IncludeComponent(
                 		"bitrix:main.include",
                 		"",
                 		Array(
                 			"AREA_FILE_SHOW" => "file",
                 			"PATH" => SITE_DIR."include/company-name.html",
                 			"EDIT_TEMPLATE" => ""
                 		),
                 		false
                 	);?>  
                </span>
                <div class="hr-foot"></div>
                <span class="phone-foot">
                 	<?$APPLICATION->IncludeComponent(
                 		"bitrix:main.include",
                 		"",
                 		Array(
                 			"AREA_FILE_SHOW" => "file",
                 			"PATH" => SITE_DIR."include/phone.html",
                 			"EDIT_TEMPLATE" => ""
                 		),
                 		false
                 	);?>
                </span>
                <br>
                <span class="email-foot">
                <?$APPLICATION->IncludeComponent(
                 	"bitrix:main.include",
                 	"",
                 	Array(
                 	    "AREA_FILE_SHOW" => "file",
                 		"PATH" => SITE_DIR."include/email.html",
                 		"EDIT_TEMPLATE" => ""
                 	),
                 	false
                );?>
                </span>
                <br>
                <span class="adres-foot">
                 	<?$APPLICATION->IncludeComponent(
                 		"bitrix:main.include",
                 		"",
                 		Array(
                 			"AREA_FILE_SHOW" => "file",
                 			"PATH" => SITE_DIR."include/adres.html",
                 			"EDIT_TEMPLATE" => ""
                 		),
                 		false
                 	);?>
                </span>
                <br>


                 	<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
	                   "AREA_FILE_SHOW" => "file",
	                   "PATH" => SITE_DIR."include/support.html",
	                   "EDIT_TEMPLATE" => ""
	                   ),
	                    false,
	                    array(
	                    "ACTIVE_COMPONENT" => "N"
	                    )
                         );?>


                <div class="hr-foot"></div>
                <span class="geexo">
                 	<?$APPLICATION->IncludeComponent(
                 		"bitrix:main.include",
                 		"",
                 		Array(
                 			"AREA_FILE_SHOW" => "file",
                 			"PATH" => SITE_DIR."include/geexo.html",
                 			"EDIT_TEMPLATE" => ""
                 		),
                 		false
                 	);?>
                </span><br>
                <div class="metrica">
                 	<?$APPLICATION->IncludeComponent(
                 		"bitrix:main.include",
                 		"",
                 		Array(
                 			"AREA_FILE_SHOW" => "file",
                 			"PATH" => SITE_DIR."include/metrica.html",
                 			"EDIT_TEMPLATE" => ""
                 		),
                 		false
                 	);?>
                </div>
            </div>
            <div class="footer-right">
                <?$APPLICATION->IncludeComponent(
                 	"bitrix:main.include",
                 	"",
                 	Array(
                 		"AREA_FILE_SHOW" => "file",
                 		"PATH" => SITE_DIR."include/footer-widget.html",
                 		"EDIT_TEMPLATE" => ""
                 	),
                 	false
                );?>
            </div>
            <div class="clear-both"></div>
        </div><!--footer-->
    </div><!--wrapper-->
</body>
</html>