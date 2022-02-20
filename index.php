<?php
get_header();
$mainPageId = 26;
?>
    <main>
        <section class="screen-one">
            <div class="background-container">
                <img src="<?= get_template_directory_uri() ?>/assets/images/main/main_header.png" class="background">
            </div>
            <h1 class="site-name">
                CAR HAULER
            </h1>
        </section>
        <section class="screen-two">
            <h2>Contacts</h2>
            <div class="block-container">
                <div class="left-block">
                    <h3>
                        GMS Headquarters
                    </h3>
                    <div class="container">
                        <div class="address">
                            <?=get_field('adress_block', $mainPageId);?>
                            <div class="phone">
                                <?=get_field('phone_number', $mainPageId);?>
                            </div>
                        </div>
                        <div class="contacts">
                            <div>Email</div>
                            <div><a href="mailto:<?=get_field('email', $mainPageId);?>"><?=get_field('email', $mainPageId);?></a></div>
                            <div>Send message</div>
                            <div><a href="<?=get_field('viber_link', $mainPageId);?>">VIBER US</a></div>
                            <div>Send form</div>
                            <div><a href="#contact-form">CONTACT US</a></div>
                        </div>
                    </div>
                </div>
                <div class="right-block">
                    <h3>
                        Technical support 24/7
                    </h3>
                    <div class="container">
                        <?=get_field('technical_support_text', $mainPageId);?>
                    </div>
                    <div class="phone">
                        <?=get_field('phone_number', $mainPageId);?>
                    </div>
                </div>
            </div>
        </section>
        <section class="screen-three">
            <div class="map-menu">
                <h2>Our Offices</h2>
                <ul class="map-tabs">
                    <li
                            tab-id="tab-1"
                            x="<?=get_field('map_cord_x_1', $mainPageId)?>"
                            y="<?=get_field('map_cord_y_1', $mainPageId)?>"
                    >
                        <?=get_field('map_city1', $mainPageId)?>
                    </li>
                    <li
                            tab-id="tab-2"
                            x="<?=get_field('map_cord_x_2', $mainPageId)?>"
                            y="<?=get_field('map_cord_y_2', $mainPageId)?>"
                    >
                        <?=get_field('map_city2', $mainPageId)?>
                    </li>
                    <li
                            tab-id="tab-1"
                            x="<?=get_field('map_cord_x_1', $mainPageId)?>"
                            y="<?=get_field('map_cord_y_1', $mainPageId)?>"
                    >
                        <?=get_field('map_city1', $mainPageId)?>
                    </li>
                    <li
                            tab-id="tab-2"
                            x="<?=get_field('map_cord_x_2', $mainPageId)?>"
                            y="<?=get_field('map_cord_y_2', $mainPageId)?>"
                    >
                        <?=get_field('map_city2', $mainPageId)?>
                    </li>
                </ul>
                <div class="map-mobile"></div>
                <div class="map-tab" id="tab-1">
                    <div class="tab-text">
                        <?=get_field('map_name1', $mainPageId)?>
                    </div>
                    <div class="address">
                        <?=get_field('map_address1', $mainPageId)?>
                    </div>
                </div>
                <div class="map-tab" id="tab-2">
                    <div class="tab-text">
                        <?=get_field('map_name2', $mainPageId)?>
                    </div>
                    <div class="address">
                        <?=get_field('map_address2', $mainPageId)?>
                    </div>
                </div>
            </div>
            <div class="map">
            </div>
        </section>
        <section class="screen-four">
            <div class="form-block">
                <h2>Contact Us</h2>
                <form id="contact-form">
                    <div class="input-field">
                        <div class="input-name">Name</div>
                        <input type="text" name="name">
                    </div>
                    <div class="input-field">
                        <div class="input-name">Phone</div>
                        <input type="text" name="phone">
                    </div>
                    <div class="input-field">
                        <div class="input-name">Email</div>
                        <input type="text" name="email">
                    </div>
                    <div class="checkbox-field">
                        <input type="checkbox" name="accept[]" id="accept" value="accepted"/>
                        <label class="custom-checkbox">
                            I agree the processing of personal data
                        </label>
                    </div>
                    <button class="send-button disabled">
                        Get in touch
                    </button>
                </form>
            </div>
            <div class="text-block">
                Please tell us more about your request and give us info about your
                company and country
            </div>
        </section>
    </main>
<?php
get_footer();

