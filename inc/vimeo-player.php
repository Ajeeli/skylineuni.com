<script src = "<?php echo $jsLink . "viewer.js"; ?> " type = "text/javascript"></script>
<section class = "my-5 py-3" id = "player-section">
    <div class = "container">
        <div class = "row">
            <div class = "col-12">
                <?php 
                if ($title == "ADVANCED FINANCIAL ACCOUNTING | SKYLINE UNIVERSITY") {
                    $videoNum = "57106028";
                } else if ($title == "ORGANIZATIONAL BEHAVIOUR | SKYLINE UNIVERSITY") {
                    $videoNum = "292606102";
                } else if ($title == "ENTREPRENEURSHIP | SKYLINE UNIVERSITY") {
                    $videoNum = "127949094";
                } else if ($title == "COST AND MANAGEMENT | SKYLINE UNIVERSITY") {
                    $videoNum = "88766766";
                } else if ($title == "COGNITIVE PSYCHOLOGY | SKYLINE UNIVERSITY") {
                    $videoNum = "114043518";
                } else if ($title == "HUMAN RESOURCE DEVELOPMENT | SKYLINE UNIVERSITY") {
                    $videoNum = "119408561";
                } else if ($title == "GENERAL SCIENCE | SKYLINE UNIVERSITY") {
                    $videoNum = "230532263";
                } else if ($title == "COMPUTER ENGINEERING | SKYLINE UNIVERSITY") {
                    $videoNum = "85370953";
                } else if ($title == "BUSINESS | SKYLINE UNIVERSITY") {
                    $videoNum = "237544565";
                }
                 else {
                     $videoNum = "35150664";
                 }
                ?>
                <iframe name = "uni-frame" class = "vimeo-player" src = "https://player.vimeo.com/video/<?php echo $videoNum; ?>?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        <hr>
        <h4>CS 101</h4>
        <div class="row text-left">
            <div class="col-12">
                <ul class="nav nav-pills mb-3 bg-dark" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Course Lectures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Materials</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <p>This lesson defines HTML and CSS, shows where and how it's used on websites you visit everyday, and looks at the example project you will be working on throughout the course</p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><p>text</p></div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        
                        <?php
                        if ($title == "ADVANCED FINANCIAL ACCOUNTING | SKYLINE UNIVERSITY"){
                        ?>
                        <p><a href = "https://drive.google.com/file/d/1m-3DSxZNkjXj2ns4nNFBoa0K_YploiVL/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1RQXpvpXXn7ZHqhVbgmC9dLGMlLU70x7m/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 2</a></p>
                        <p><a href = "https://drive.google.com/file/d/1G1zU2favkp2uONsHcOAwMZRbiTb_yBZd/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 3</a></p>
                        <p><a href = "https://drive.google.com/file/d/1WTCPZ0JraaMz8nQVXQUWt3bi3GslsJXJ/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 4</a></p>
                        <p><a href = "https://drive.google.com/file/d/1kujPqfTA_RsC2SjYat5ghjp8rc5ut4v4/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 5</a></p>
                        <p><a href = "https://drive.google.com/file/d/1i3JZMXF3RKgd__qmwJ3pKvoOcf8Qvw9q/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 6</a></p>
                        <p><a href = "https://drive.google.com/file/d/1JO6uCScJ7w8BOrMvfYjqs_X9d8dXdyII/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 8</a></p>
                        <p><a href = "https://drive.google.com/file/d/1t7f7GatPSS23oR4hc_msyuuH198knbfy/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 9</a></p>
                        <p><a href = "https://drive.google.com/file/d/1BgoedivOpIpxebtFv8YA8XDUlnuYQPyi/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 10</a></p>
                        <p><a href = "https://drive.google.com/file/d/1wdbwTtEi80ocPAlbor2EDQVNbwDA8FNE/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 11</a></p>
                        <p><a href = "https://drive.google.com/file/d/10DrVD2ygrztl4M18Bv3w65_VHLsgtkgy/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 12</a></p>
                        <p><a href = "https://drive.google.com/file/d/1OE7nGcBUx3nOdWKdEnseXpOJ6RyZzeY8/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 13</a></p>
                        <p><a href = "https://drive.google.com/file/d/16R1mEWR7KyJieL1JvCfpx3ztYYEdWTOT/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 14</a></p>
                        <p><a href = "https://drive.google.com/file/d/1LisgAqPjel4ai9bQmljvb9VIKT0uSl_4/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting_ Chap 15</a></p>
                        <p><a href = "https://drive.google.com/file/d/1CmTFDUlkrzYMWXp1OxTN_9QCrzx_kkky/preview" target="uni-frame" onclick = "viewer()">Advance Financial Accounting (Questions)</a></p>
                        <p><a href = "https://drive.google.com/file/d/1kKiQEJvlI2kCQFLS9otuqYrDBKfFKYeo/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1Q9IBgCIt_RFFJm9W8qAHJ98DIehNSakp/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 2</a></p>
                        <p><a href = "https://drive.google.com/file/d/1oM8mAnfLtY1OG1NEsP_0j6KxHNxsVym_/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 3</a></p>
                        <p><a href = "https://drive.google.com/file/d/1R6CRHRszeYrYs9s_3EtT7_Pa1k5_aUWM/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 4</a></p>
                        <p><a href = "https://drive.google.com/file/d/1vlbIP4Rn67YpnKKlqOsahDzLe4as8gp8/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 5</a></p>
                        <p><a href = "https://drive.google.com/file/d/1_hGhwn6anFYgC6kPgwPCKWULN-TdItHE/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 6</a></p>
                        <p><a href = "https://drive.google.com/file/d/1KcP4ZFC1kgqpDLMoP9R4NFkwywdq68ue/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 7</a></p>
                        <p><a href = "https://drive.google.com/file/d/13USElWV8VO2bvKHGuU9VrJgaSDXN-ILI/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 8</a></p>
                        <p><a href = "https://drive.google.com/file/d/1O3IIXjfCpA3xh0ogWeTAI-5NG7gIIzmo/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 9</a></p>
                        <p><a href = "https://drive.google.com/file/d/1OTDjW-GqHCwkTG-s__W2GoeMzWEiV5Qk/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 10</a></p>
                        <p><a href = "https://drive.google.com/file/d/11C5h6o2k7D2of-1u5QjA9X-FM5zqDyHA/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 11</a></p>
                        <p><a href = "https://drive.google.com/file/d/1yKHfNsitaNJ0Stf0z-q43k07w8cy7rMW/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 12</a></p>
                        <p><a href = "https://drive.google.com/file/d/1DwJ7A7AUKbjJME95s2QoGqbOOn7hovb8/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 13</a></p>
                        <p><a href = "https://drive.google.com/file/d/1DUFEPEVXLYndgACHWmxCU_P0iNbBskvc/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 14</a></p>
                        <p><a href = "https://drive.google.com/file/d/1NvpFilseb4Llok-G7yRA4SFXWGa8DTTd/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing - Chapter 15</a></p>
                        <p><a href = "https://drive.google.com/file/d/1Vx7_jSkeWSKCdeP0efsXIKTUSgq3lc6H/preview" target="uni-frame" onclick = "viewer()">Fundamental of Auditing (Questions)</a></p>
                        
                        <?php 
                        } else if ($title == "COST AND MANAGEMENT | SKYLINE UNIVERSITY"){
                        ?>
                        <p><a href = "https://drive.google.com/file/d/1pRDW34oymBQik7aqrt_slpaGZSKYMNKy/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1tFQAc-NaocpnCAcw5Qai9UabfuB45ClU/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 2</a></p>
                        <p><a href = "https://drive.google.com/file/d/1_t0vhwGWzvrefTagZEwqnY5rXCf9xPjC/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 3</a></p>
                        <p><a href = "https://drive.google.com/file/d/1wbBpItFEamOj7R3hPrwcxThMHJcVHFM0/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 4</a></p>
                        <p><a href = "https://drive.google.com/file/d/17CGXznc64chXZ3k-fEmK8WYgodo_KtMy/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 5</a></p>
                        <p><a href = "https://drive.google.com/file/d/1nd20qWGVPSj0CzassQ0xCBLgP9bmb0up/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 6</a></p>
                        <p><a href = "https://drive.google.com/file/d/1lhzryPrestm0OVNVPDcjo5G_GcCQ6qvI/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 7</a></p>
                        <p><a href = "https://drive.google.com/file/d/1FHA1hjt6mao1NS5r0-G7riplkg_DdCD2/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 8</a></p>
                        <p><a href = "https://drive.google.com/file/d/1ZWHh0v8F4iLUa-6TZjli7h2dmRNpHlVA/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 9</a></p>
                        <p><a href = "https://drive.google.com/file/d/1wQ2fdgG5Xb1_Qpq8IpLRRvesEPjS59gu/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 10</a></p>
                        <p><a href = "https://drive.google.com/file/d/11gQIlOvxppSoi9V2Ie_z0lHNwUKGUYgx/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 11</a></p>
                        <p><a href = "https://drive.google.com/file/d/1Pnw1E59e1JWFghWb13Ol2fRHuv2rfowX/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 12</a></p>
                        <p><a href = "https://drive.google.com/file/d/1vL3sSc30CtMV1UYPDmf6ojZHYSMqgQWl/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 13</a></p>
                        <p><a href = "https://drive.google.com/file/d/1CJBSEVEpNEfCfywIt41MbCirptP5wXth/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 14</a></p>
                        <p><a href = "https://drive.google.com/file/d/1t2r9Wxtkd1k-yRPfCqiXH_d7yqBErip1/preview" target="uni-frame" onclick = "viewer()">Cost and Management Accounting-chapter 15</a></p>
                        <p><a href = "https://drive.google.com/file/d/1azis9jde56_E_GfwTVmhbdvXzSg0S4sq/preview" target="uni-frame" onclick = "viewer()">Cost &amp; Management Accounting (Questions)</a></p>
                        
                        <?php 
                        } else if ($title == "ENTREPRENEURSHIP | SKYLINE UNIVERSITY"){
                        ?>
                        <p><a href = "https://drive.google.com/file/d/1wBC6HaXnXYRLQHc82zNYAcbgei3BNi0D/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1JzcesTIML7zaOqaKoStlYabE2rdVUF9r/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 2</a></p>
                        <p><a href = "https://drive.google.com/file/d/13pxr0X9sQGsWuIVxr3N0oxXP5pWJBxqx/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 3</a></p>
                        <p><a href = "https://drive.google.com/file/d/1Oijb1UI1wyjnByr0sjAdBeIZibmNyxpj/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 4</a></p>
                        <p><a href = "https://drive.google.com/file/d/19u-SEoHyUU8wvRGRxFhAS77SPnA7P8hs/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 5</a></p>
                        <p><a href = "https://drive.google.com/file/d/17F-dU9e17PzPJ_YKt-NIx5aK10r8hW9x/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 6</a></p>
                        <p><a href = "https://drive.google.com/file/d/1WDwRkl1E111uds5YEh-nHG2SkkbUT8Y7/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 7</a></p>
                        <p><a href = "https://drive.google.com/file/d/13hZxoncH7VGZ8JtRvYedstBzAx9a4I3Q/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 8</a></p>
                        <p><a href = "https://drive.google.com/file/d/1TnszND1nBB8OuscnQXTGr6nam3KUg5_3/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 9</a></p>
                        <p><a href = "https://drive.google.com/file/d/1kzvaeaDmMrrSKSXDbi3W0pIo0jTQkV8E/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 10</a></p>
                        <p><a href = "https://drive.google.com/file/d/1bNrZmzRzefi7vuahlTs1SNXhdxHGdRv2/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 11</a></p>
                        <p><a href = "https://drive.google.com/file/d/1nWDu9oh1PG-9wRl20p6QK0p92aqjocgy/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 12</a></p>
                        <p><a href = "https://drive.google.com/file/d/1w0iffS9CQkJogBkipw5mZ5nHpySBjbeL/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 13</a></p>
                        <p><a href = "https://drive.google.com/file/d/1I10xU08lu_UYaz0KxVhZoGdokDBMWCDr/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 14</a></p>
                        <p><a href = "https://drive.google.com/file/d/1vOfxbnLzAmF2_dgjwk_13V8oVmwfrcRG/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship-chapter 15</a></p>
                        <p><a href = "https://drive.google.com/file/d/1bx421nt55to9RXaj5v5k7zn11lJqfe6T/preview" target="uni-frame" onclick = "viewer()">Entrepreneurship (Questions)</a></p>
                        
                        <?php 
                        } else if ($title == "HUMAN RESOURCE DEVELOPMENT | SKYLINE UNIVERSITY") {
                        ?>
                        <p><a href = "https://drive.google.com/file/d/1mr89TP1-Nqy_r2xxPC-AVKsdctBSXIFP/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1SDOm9YuYqDUEQj79bk_iWbmhhmIZFMWD/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 2</a></p>
                        <p><a href = "https://drive.google.com/file/d/1pAWfOtvQ2tcuHwoUv6T8-kZUQPbBqUtm/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 3</a></p>
                        <p><a href = "https://drive.google.com/file/d/1tzZFmOECyCGG_1RYAOc4XS4ibm6_krgX/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 4</a></p>
                        <p><a href = "https://drive.google.com/file/d/1YevEnCmaYHp_Zvn3C3nFNKZ_nTqY1LMZ/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 5</a></p>
                        <p><a href = "https://drive.google.com/file/d/1ct-5tEtjnpDbjN0wjcgnlzCydvhiAvb0/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 6</a></p>
                        <p><a href = "https://drive.google.com/file/d/1wfOJMuIdQebxPAVISHaL6Gi6MB9S3GUM/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 7</a></p>
                        <p><a href = "https://drive.google.com/file/d/1oHFYt6gFhewjGLwWX2r4ufggoiOCdkB0/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 8</a></p>
                        <p><a href = "https://drive.google.com/file/d/1JSKSPzAWzbbsH5-oVToxVDHsskhzQQeP/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 9</a></p>
                        <p><a href = "https://drive.google.com/file/d/1ev1PRpR0p0r6L0sRb966BUiWxm_61xwL/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 10</a></p>
                        <p><a href = "https://drive.google.com/file/d/1vcFyDKiWv89b4bfX8mmZU7DtqAuniBXS/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 11</a></p>
                        <p><a href = "https://drive.google.com/file/d/1Mt7l5tBU8FAESyi62-MZBxDDK39_CtzD/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 12</a></p>
                        <p><a href = "https://drive.google.com/file/d/1_hfxFMHT-qCGg-J_oU_VvRIb7NSHR0wF/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 13</a></p>
                        <p><a href = "https://drive.google.com/file/d/1e2yBAQEiNNiFu6h0aPsNV1Js7-7YqUE_/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 14</a></p>
                        <p><a href = "https://drive.google.com/file/d/1DjsBOIzfZsg3kqG-7CCGYFhcMmgmKy83/preview" target="uni-frame" onclick = "viewer()">HRD - Chapter 15</a></p>
                        <p><a href = "https://drive.google.com/file/d/1tyv9HXvHKW0imrKdk6ut5EJA8aYQvVE4/preview" target="uni-frame" onclick = "viewer()">HRD (Questions)</a></p>
                        
                        <?php 
                        } else if ($title == "COGNITIVE PSYCHOLOGY | SKYLINE UNIVERSITY") {
                        ?>
                        <p><a href = "https://drive.google.com/file/d/15mEwiPRIZ1jFxtzMf3DP_Jxl9Ek16-Yf/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1Vw4Ir3pA-qdtcrTp27IJDZeWsu90CmEV/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 2</a></p>
                        <p><a href = "https://drive.google.com/file/d/1WPfsVi0OVmfWaPI4noQImDD6DHAH34xk/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 3</a></p>
                        <p><a href = "https://drive.google.com/file/d/1j8Lk5cw8-p5dgUosDznN_eO_dJ55A_K4/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 4</a></p>
                        <p><a href = "https://drive.google.com/file/d/17Lq1WAlqCO0gPPxg8LrpznaPyvluBLDW/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 5</a></p>
                        <p><a href = "https://drive.google.com/file/d/1GjBxVM2ZUwHl__cLgSGEaemqJD28faXe/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 7</a></p>
                        <p><a href = "https://drive.google.com/file/d/1gi-_T9uT3RdJlwkw_5K3JSV9miCt_AYw/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 8</a></p>
                        <p><a href = "https://drive.google.com/file/d/1ChUrBNIO_awWcib1XhaSItmkGWjchKiU/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 9</a></p>
                        <p><a href = "https://drive.google.com/file/d/1pon_IaevJtIU2MQFsJhYlthDd3jWNzYC/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 10</a></p>
                        <p><a href = "https://drive.google.com/file/d/1l3lwNOd3Fzb-3e9KugVUmmDxTip7Zxzl/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 11</a></p>
                        <p><a href = "https://drive.google.com/file/d/1fpnDbO4393iMAzc-CgNHcEqx6fpAYcqk/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 12</a></p>
                        <p><a href = "https://drive.google.com/file/d/1Ybx7ElOnQdFLDhq2a0B4PBKnOPjlgYHF/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 13</a></p>
                        <p><a href = "https://drive.google.com/file/d/18gEP22dwW8GFR51uW7otwShRKKPgeIkh/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 14</a></p>
                        <p><a href = "https://drive.google.com/file/d/1EPEQElJ2g8DmfWa5jb920xsv0vYH4v_M/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology - Chapter 15</a></p>
                        <p><a href = "https://drive.google.com/file/d/1BpBoPqU14RLeQtJJUBHesb2KhLnAfh3Z/preview" target="uni-frame" onclick = "viewer()">Cognitive Psychology (Questions)</a></p>
                        
                        <?php 
                        } else if ($title == "ORGANIZATIONAL BEHAVIOUR | SKYLINE UNIVERSITY") {
                        ?>
                        <p><a href = "https://drive.google.com/file/d/1ShOwtv9ulA-_JJBlh9bpTlX6Zr7cwnjX/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1apuPZyJBfxgl-cbHFSQJbV9QzUtOxDD9/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 2</a></p>
                        <p><a href = "https://drive.google.com/file/d/10Qs_S1tfUSDBft2lCODPxn-1ebjdud6A/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 3</a></p>
                        <p><a href = "https://drive.google.com/file/d/14WEiKyykwiyPnczwc5sAu-EancaMs34F/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 4</a></p>
                        <p><a href = "https://drive.google.com/file/d/1LtvNLjfR-0rYM2_Q9tNc3pRQzGDSaqwN/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 5</a></p>
                        <p><a href = "https://drive.google.com/file/d/1LaRs7mUQao2dqn_aD6LiyTde_4tco7dx/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 7</a></p>
                        <p><a href = "https://drive.google.com/file/d/1lLgM6jcIF1A9bCs4xrVxxLvsO5BatrUk/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 8</a></p>
                        <p><a href = "https://drive.google.com/file/d/1guBfCfPCT8ZPBmsO3VdtRv0YMdBB2o7I/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 9</a></p>
                        <p><a href = "https://drive.google.com/file/d/1zYGus-tc6fdRBkGd3vmTisd-_CaaxpeA/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 10</a></p>
                        <p><a href = "https://drive.google.com/file/d/1_9lO_P5LKv67Ro0W6V8U4fXIODtFBCgE/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 11</a></p>
                        <p><a href = "https://drive.google.com/file/d/1_dvLiedZhQosp81sKil_vses2U7z-4TN/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 12</a></p>
                        <p><a href = "https://drive.google.com/file/d/1V0dXzlLvrLQsyx0RpbpIOAwmMBe9Bnw_/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 13</a></p>
                        <p><a href = "https://drive.google.com/file/d/1eMVfVSjdRHO2Q2U_DMk711RLQDgmokvM/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 14</a></p>
                        <p><a href = "https://drive.google.com/file/d/1HRotUq0qXs06c39r6xey4qrOoj7IFrBU/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour - Chapter 15</a></p>
                        <p><a href = "https://drive.google.com/file/d/1rJfpte4oVVnHiAb91cIQBvEVyhIIx-_2/preview" target="uni-frame" onclick = "viewer()">Organizational Behaviour (Questions)</a></p>
                        <p><a href = "https://drive.google.com/file/d/13SKio3bd31-0-_BNS6Cf4ZWX6KvxRxk0/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1_oHMFdBbk3ukXIsreEQoGIAXc3u8JIs1/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 2</a></p>
                        <p><a href = "https://drive.google.com/file/d/1VejTFa535IZHrGkto0mzdUDGgPY_JQQJ/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 3</a></p>
                        <p><a href = "https://drive.google.com/file/d/1NZV2ugbVl_5hemT5jBX-8F8K1-PVnmYn/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 4</a></p>
                        <p><a href = "https://drive.google.com/file/d/1tHPA0psn1wPn5OwzEj-9025qzvv0SCVy/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 5</a></p>
                        <p><a href = "https://drive.google.com/file/d/1RdNT4al_LZ970eFoZPB7f1XFYNy0JeY3/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 6</a></p>
                        <p><a href = "https://drive.google.com/file/d/1z0gUjH7K7RJn4mlZ5px7jdr6dGZMDs7P/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 7</a></p>
                        <p><a href = "https://drive.google.com/file/d/10DJaeP_iVdaeXA5l5QE1lrinWXWimT4n/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 8</a></p>
                        <p><a href = "https://drive.google.com/file/d/1bpjJTwJMEEWYM-0i7rBA1RFPrKaVeBLX/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 9</a></p>
                        <p><a href = "https://drive.google.com/file/d/1UpwalOl-EES-z1MvdRC-LnDXIrN3LfhD/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 10</a></p>
                        <p><a href = "https://drive.google.com/file/d/1UpwalOl-EES-z1MvdRC-LnDXIrN3LfhD/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 11</a></p>
                        <p><a href = "https://drive.google.com/file/d/1KES34XAX5Gq3z83uKycNz7oBPwmLWJhO/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 12</a></p>
                        <p><a href = "https://drive.google.com/file/d/1IvxfQy2uEwk3l9Xd4xtWv7ai87KtcNDd/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 13</a></p>
                        <p><a href = "https://drive.google.com/file/d/1SjjI57QhgGwmGcsoI5b5zmkqmfJePmi0/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 14</a></p>
                        <p><a href = "https://drive.google.com/file/d/1j5ZpTHkouh2mLFr42WT4YMlSytUzeXEh/preview" target="uni-frame" onclick = "viewer()">Organization Development - Chapter 15</a></p>
                        <p><a href = "https://drive.google.com/file/d/1IDe3SkzBRUQ8W9Chu8g8ytd_pjF4oxuP/preview" target="uni-frame" onclick = "viewer()">Organization Development (Questions)</a></p>
                        
                        <?php 
                        } else if ($title == "COMPUTER ENGINEERING | SKYLINE UNIVERSITY") {
                        ?>
                        <p><a href = "https://drive.google.com/file/d/1QACvv2jngZ_V8g6hDbG39kooAsknL0Qm/preview" target="uni-frame" onclick = "viewer()">Introduction to Computers and Engineering Problem Solving - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/13wVyCynAsCyAD1E7G-ixaNaJvf_H2o9J/preview" target="uni-frame" onclick = "viewer()">Introduction to CPU - Chapter 1</a></p>
                        
                        <?php 
                        } else if ($title == "BUSINESS | SKYLINE UNIVERSITY") {
                        ?>
                        <p><a href = "https://drive.google.com/file/d/1l1Z8UJoea-7HZPdu3VRp9IZqBhgrUnPq/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1Au1xDBXQBtRHlWQvbDwBnonOWu7e3UjM/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 2</a></p>
                        <p><a href = "https://drive.google.com/file/d/1ZBwQej7dQ4DeTb7zweeiB1jDl5ZNQzTO/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 3</a></p>
                        <p><a href = "https://drive.google.com/file/d/1Y4z83JcCLtQ_aeBt_ZWW28xbvJ1kkbhR/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 4</a></p>
                        <p><a href = "https://drive.google.com/file/d/12H0XKLGQolZbipfjq3SpEXY-4QQBkojm/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 5</a></p>
                        <p><a href = "https://drive.google.com/file/d/1YJ5Jk3KFV_iTT__pcQnfaNe5qh523J0i/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 6</a></p>
                        <p><a href = "https://drive.google.com/file/d/1zSFfNavUQysG-VTth7mQ5WaYGD03vVkA/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 7</a></p>
                        <p><a href = "https://drive.google.com/file/d/10uoNnmZzbzlay93Yw4E1GSZCQuN7knUB/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 8</a></p>
                        <p><a href = "https://drive.google.com/file/d/11X17i2N6DyoUA93JVSvk0kNbSJhtV2sh/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 9</a></p>
                        <p><a href = "https://drive.google.com/file/d/1exAUZ0fm5SoBqR8653GnWaBaxOu4_1fF/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 10</a></p>
                        <p><a href = "https://drive.google.com/file/d/1tvZD0Okg8OsZS3GGmjndoJ-KcfMXzylO/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 11</a></p>
                        <p><a href = "https://drive.google.com/file/d/1KBVjSLVUHWbjOvlPKFNPlATkJtThp3kQ/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 12</a></p>
                        <p><a href = "https://drive.google.com/file/d/1Vx86aVR8uT2Xq_OBVgl8vONBAewRjplN/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 13</a></p>
                        <p><a href = "https://drive.google.com/file/d/1VmOHEnGBmiYxg63vfgy9GYUrOqp033PK/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 14</a></p>
                        <p><a href = "https://drive.google.com/file/d/1894yfMd5Gonc8YOE5SgZGKc8FapLsYSx/preview" target="uni-frame" onclick = "viewer()">Business Ethics - Chapter 15</a></p>
                        <p><a href = "https://drive.google.com/file/d/1y1p5UapSyYiDrbkANWgLMMlueUcLaRl6/preview" target="uni-frame" onclick = "viewer()">Business Ethics (Questions)</a></p>
                        <p><a href = "https://drive.google.com/file/d/1Y4_SGWeE1mNiUYVFKm-f0JnH19CMP1vJ/preview" target="uni-frame" onclick = "viewer()">Project Management - Introduction - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1CHaLzRTvKluHB7eAiDLPqfwGbGMkI87l/preview" target="uni-frame" onclick = "viewer()">Project Management - Project Management - Chapter 2</a></p>
                        <p><a href = "https://drive.google.com/file/d/1I_eyf4XHeC46o7Cp3GQL0whDeCODDh--/preview" target="uni-frame" onclick = "viewer()">Project Management - Project Life Cycle - Chapter 3</a></p>
                        <p><a href = "https://drive.google.com/file/d/1kOqyHVliSScKFmBplskobIZoEWWN1G85/preview" target="uni-frame" onclick = "viewer()">Project Management - Project Conception and Project Feasibility - Chapter 4</a></p>
                        <p><a href = "https://drive.google.com/file/d/18pbMNmx2tt3NISacy7gmv-en7Bic9iO1/preview" target="uni-frame" onclick = "viewer()">Project Management - Project Selection - Chapter 5</a></p>
                        <p><a href = "https://drive.google.com/file/d/1bTvZwI-1qJ7prD96FsYX_RmASPE5kW29/preview" target="uni-frame" onclick = "viewer()">Project Management - Project Planning - Chapter 6</a></p>
                        <p><a href = "https://drive.google.com/file/d/17nnPlLSm9uF7zJW90th6J05Fpa09cutk/preview" target="uni-frame" onclick = "viewer()">Project Management - Project Planning 2 - Chapter 7</a></p>
                        <p><a href = "https://drive.google.com/file/d/1LAnF-DJlBqB8UHEYSMpaXkZg5sqdUy57/preview" target="uni-frame" onclick = "viewer()">Project Management - Work Breakdown Structure - Chapter 8</a></p>
                        <p><a href = "https://drive.google.com/file/d/1C4yHvYy_WhtndOxJQr1oDlJPC5uZh7m1/preview" target="uni-frame" onclick = "viewer()">Project Management - Schedules and Charts - Chapter 9</a></p>
                        <p><a href = "https://drive.google.com/file/d/11LrRIigTappERM6GcwVRd1JpHHGvLzyq/preview" target="uni-frame" onclick = "viewer()">Project Management - Project Scope Management - Chapter 10</a></p>
                        <p><a href = "https://drive.google.com/file/d/1uTUmfqoTXT69-wEsoYIlxJLWqZRu6ryj/preview" target="uni-frame" onclick = "viewer()">Project Management - Network Scheduling Technique - Chapter 11</a></p>
                        <p><a href = "https://drive.google.com/file/d/1LbcC_mlgEG_nRWzRLgDZVmoBUmUB0ch7/preview" target="uni-frame" onclick = "viewer()">Project Management - Pricing and Estimation - Chapter 12</a></p>
                        <p><a href = "https://drive.google.com/file/d/1VkY6h3xtr9-XOLW_F9q3GJa3ICMMSES9/preview" target="uni-frame" onclick = "viewer()">Project Management - Quality Project Management - Chapter 13</a></p>
                        
                        <?php 
                        } else if ($title == "GENERAL SCIENCE | SKYLINE UNIVERSITY") {
                        ?>
                        <p><a href = "https://drive.google.com/file/d/1yu_3ni2QvvJ1JdhFCWuuRJSQBje-TFYd/preview" target="uni-frame" onclick = "viewer()">Bioengineering - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1gjKGZoUffGJnBRl3VgBZ5JTMlupZFkHm/preview" target="uni-frame" onclick = "viewer()">Electricity and Magnetism - chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1fnS7x9uo8D38OmRlQOX3mPARnHi3BMB8/preview" target="uni-frame" onclick = "viewer()">Integrated Chemical Engineering Topics - Introduction to Biocatalysis ch.1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1c-eBpTat2s9gVFPT6S7zCZLYAvR_-_Nl/preview" target="uni-frame" onclick = "viewer()">Environmental Earth Science - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/16wQAzEOxO6iXbYpbQcxGM7I9rrKAEeLP/preview" target="uni-frame" onclick = "viewer()">Fundamental of Public Policy - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/17gvgtsSm8-E0RS72hNrJ7_GcBT4UdqdP/preview" target="uni-frame" onclick = "viewer()">Introduction to Robotics - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1LIruetNQ3S1s_kEm2y7K7pEpHoLNnUjg/preview" target="uni-frame" onclick = "viewer()">Principes of Medical Imaging - A Brief Introduction to Tomographic Imaging - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1uY9zf3aPbuhTW8Ou5ZQ639ajXujjgaHA/preview" target="uni-frame" onclick = "viewer()">Introduction to Numerical Analysis for Engineering - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1cB9Gr7w8T3wH37YDGutXtzZsIUpTwYe1/preview" target="uni-frame" onclick = "viewer()">Introduction to Ionizing Radiation - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1b3t5DjHiTTqBl4J0maNgkvg5ZYuhxZ4n/preview" target="uni-frame" onclick = "viewer()">Electrochemistry - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1KUkOoLMgRihVhwzQAFNDMK33BP86IXwX/preview" target="uni-frame" onclick = "viewer()">Stoichiometry - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1mkWEDIv9aOBp8Z94qnCiXIvUSesg1zUC/preview" target="uni-frame" onclick = "viewer()">Organization Behavior - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1l-HndZ8qII2QZKW-1c0qr8Ef6-p5wv_a/preview" target="uni-frame" onclick = "viewer()">E-commerce - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1kIBDNIWDLzmA6awx4cjEimBBC2c3N08s/preview" target="uni-frame" onclick = "viewer()">Knowledge Management - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1cxVLQHhmmz9VPTKoe7t0rT1k8uOWXSK0/preview" target="uni-frame" onclick = "viewer()">Introduction to Sociology - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1QQ1fPQVPunWbYPE4DeS9vuqb5Lu08crq/preview" target="uni-frame" onclick = "viewer()">Fundamental of Ecology - Chapter 1</a></p>
                        <p><a href = "https://drive.google.com/file/d/1Lwf7Q0f7Tusj5Qpqm_D8LKuiRtTahBhg/preview" target="uni-frame" onclick = "viewer()">Strategic Management - Chapter 1</a></p>
                        
                        <?php 
                        } else {
                        ?>
                        <p>No Material Available</p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>