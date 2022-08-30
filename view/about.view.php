    <!-- ======================== About Us ========================== -->

    <h3 class="about-title" id="about">ACERCA DE... NOSOTROS</h3>

    <div class="about-our__company-background">
        <div class="about-our__company container">
            <h3 class="about-our__company-title">NUESTRA EMPRESA</h3>
            <p class="about-our__company-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</p>
            <div class="about-our__company-content__img">
                <img class="about-our__company-img" src="../img/coffee.jpg">
            </div>
            <p class="about-our__company-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>


    <div class="about__us-container">
        <h3 class="about__us-container-title container">¿Quienes somos?</h3>
        <?php foreach($about_array_one as $about): ?>
        <div class="about container">

            <div class="about__column">
                <div class="about__column--column1">
                    <img src="../img/<?php echo $about['img']; ?>" class="about__column-img" alt="Cofundador" title="Cofundador">                
                </div>
                <div class="about__column--column2">
                    <h3 class="about__column-name"><?php echo ucwords($about['name']); ?></h3>
                    <p class="about__column-txt"><?php echo $about['description']; ?></p>
                </div>
            </div>

        </div>
        <?php endforeach; ?>

        <?php foreach($about_array_two as $about): ?>
        <div class="dark-green">
                <div class="about container">

                    <div class="about__column about__column-dark">
                        <div class="about__column--column2">
                            <h3 class="about__column-name-dark"><?php echo ucwords($about['name']); ?></h3>
                            <p class="about__column-txt-dark"><?php echo $about['description']; ?></p>
                        </div>
                        <div class="about__column--column1 about__column--column1-dark">
                            <img src="../img/<?php echo $about['img']; ?>" class="about__column-img-dark" alt="Cofundador" title="Cofundador">                
                        </div>
                    </div>

                </div>
        </div>
        <?php endforeach; ?>

        <?php foreach($about_array_three as $about): ?>
        <div class="about container">

            <div class="about__column">
                <div class="about__column--column1">
                    <img src="../img/<?php echo $about['img']; ?>" class="about__column-img" alt="Cofundador" title="Cofundador">                
                </div>
                <div class="about__column--column2">
                    <h3 class="about__column-name"><?php echo ucwords($about['name']); ?></h3>
                    <p class="about__column-txt"><?php echo $about['description']; ?></p>
                </div>
            </div>

        </div>
        <?php endforeach; ?>    
    </div>
