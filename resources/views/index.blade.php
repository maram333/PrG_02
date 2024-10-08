<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>بانوراما القصيم للبرمجة والتصميم</title>
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* CSS Adjustments */
        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden; 
        }
       
        #wrapper {
            max-width: 100vw; 
            overflow-y: auto; 
        }

        #content {
            min-height: 100vh; 
            box-sizing: border-box; 
        }

        #content .section img {
            max-width: 100%; 
            height: auto; 
            display: block; 
            margin-bottom: 1em; 
        }

        #content .section h2 {
            margin-top: 2em;
            margin-bottom: 1em;
            font-size: 1.5em; 
        }

        #content .section ul {
            padding-left: 1.5em; 
        }

        #content .section p {
            margin-bottom: 1em; 
            line-height: 1.6; 
        }
    </style>
</head>
<body>
        <style>
         body {
         background-image: url('images/b.gif');
         background-size: cover;
        } 
        </style>

    <!-- START HEADER -->
    <header id="header">
        <div class="logo">
            <img width="50" src="images/logo.png" alt="Logo">
        </div>
        <div class="content">
            <div class="inner">
                <h1>بانوراما القصيم للبرمجة والتصميم</h1>
                <p>نقدم لعملائنا أفضل الحلول والخدمات الرقميـة المتكامـــــــــــــــلة</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#about" onclick="showSection('about')">من نحن</a></li>
                <li><a href="#services" onclick="showSection('services')">خدماتنا</a></li>
                <li><a href="#work" onclick="showSection('work')">عملائنا</a></li>
                <li><a href="#contact" onclick="showSection('contact')">تواصل معنا</a></li>
            </ul>
        </nav>
    </header>
    <!-- END HEADER -->

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- START CONTENT -->
        <div id="content">
            <div id="about" class="section">
                <h1>من نحن</h1>
                <img src="images/pic03.jpg" alt="About Us">
                <p>إيمانًا منا بأهمية البرمجة و العالم الرقمي في حياتنا كنا نحن بانوراما القصيم، من الرواد في هذه المجالات التي تسعى للارتقاء بمجال التصميم والبرمجة لتكون من كبرى الصروح بالمملكة والشرق الأوسط في تصميم وبرمجة المواقع وتطبيقات الجوال والبرامج الإدارية والمحاسبية.</p>
                <p>نهدف دائمًا لإرضاء كافة العملاء لدينا من خلال تقديم مجموعة من الخدمات المميزة. نسعى لخلق وتنمية جسور التعاون والشراكة وتبادل الخبرات بين المبرمجين في مختلف تخصصاتهم، ونستهدف إعداد برامج متميزة تلبي الاحتياجات الحقيقية للمجتمع وسوق العمل مع تطويرها المستمر. ندرب المبرمجين حديثي التخرج لنرتقي بـالمستويات المهارية في جميع مجالات البرمجة من الأنشطة الأساسية لخدمة المجتمع المدني.</p>
                <p>رسالتنا هي خلق مجتمع واعِ فكريًا و متطور علميًا، قادرًا على مواكبة العالم الرقمي بأسهل الطرق وأبسطها.</p>
            </div>

            <div id="services" class="section">
                <h1>خدماتنا</h1>
                <!-- First Service -->
                <h2>البرمجة من الصفر</h2>
                <img src="images/pic01_7.jpg" alt="البرمجة من الصفر">
                <p>نقوم بتحويل فكرتك إلى موقع إلكتروني أو تطبيق جوال مع سكريبت مبرمج من الصفر.</p>
    
                <!-- Second Service -->
                <h2>سكريبت الجمعيات الخيرية</h2>
                <img src="images/pic01_6.jpg" alt="سكريبت الجمعيات الخيرية">
                <p>سكريبت متكامل لمواقع الجمعيات الخيرية وفق ضوابط المركز السعودي للحوكمة.</p>
    
                <!-- Third Service -->
                <h2>برنامج قمة للنداء الآلي</h2>
                <img src="images/pic01.jpg" alt="برنامج قمة للنداء الآلي">
                <p>هو نظام تبليغ عن الحالات الطارئة للمنشآت الصحية أو غيرها من الأماكن التي تحتاج سرعة استجابة يتم النداء عن طريق:</p>
                <ul>
                    <li>السماعات الداخلية للمنشأة</li>
                    <li>الاتصال المباشر بالفريق المناوب</li>
                    <li>الرسائل النصية</li>
                </ul>
                <p>مع إمكانية التعديل الكامل في شفرات نداء الطوارئ.</p>
    
                <!-- Fourth Service -->
                <h2>برنامج قمة لنقاط البيع</h2>
                <img src="images/pic01_1.jpg" alt="برنامج قمة لنقاط البيع">
                <p>
                <ul>
                    <li>لا يحتاج جهاز بمواصفات عالية</li>
                    <li>يعمل على الجوال</li>
                    <li>قاعدة بيانات محمية مرفوعة على الشبكة</li>
                    <li>نسخ احتياطي كل 24 ساعة</li>
                </ul>
                </p>
    
                <!-- Fifth Service -->
                <h2>منصة بانوراما المتكاملة للأندية الرياضية</h2>
                <img src="images/pic01_5.jpg" alt="منصة بانوراما المتكاملة للأندية الرياضية">
                <p>تقدم بانوراما القصيم للبرمجة منصة متكاملة لإدارة الأندية الرياضية تشتمل على الآتي:</p>
                <ul>
                    <li>موقع إلكتروني</li>
                    <li>تطبيقين جوال للموقع (آيفون و أندرويد)</li>
                    <li>متجر إلكتروني</li>
                    <li>تطبيقين جوال للمتجر (آيفون و أندرويد)</li>
                    <li>نظام المراسلات الإلكترونية</li>
                    <li>منصة تذاكر</li>
                </ul>
    
                <!-- Sixth Service -->
                <h2>نظام قمة للمحاسبة</h2>
                <img src="images/pic01_2.jpg" alt="نظام قمة للمحاسبة">
                <p>هو نظام يمكن مكاتب المحاسبة من إدارة جميع أعمالها مثل:</p>
                <ul>
                    <li>الحسابات</li>
                    <li>القيود اليومية</li>
                    <li>ميزان المراجعة</li>
                    <li>القوائم المالية</li>
                    <li>وغيرها من المهام المحاسبية</li>
                </ul>
    
                <!-- Seventh Service -->
                <h2>نظام قمة للمحاماة</h2>
                <img src="images/pic01_3.jpg" alt="نظام قمة للمحاماة">
                <p>هو نظام يمكن مكاتب المحاماة من إدارة جميع أعمالها مثل:</p>
                <ul>
                    <li>تقديم الدعاوي</li>
                    <li>إدارة المحامين وتوكيل القضايا لهم</li>
                    <li>خط سير لمتابعة كل قضية</li>
                </ul>
    
                <!-- Eighth Service -->
                <h2>منصة بانوراما لإدارة المشاريع الهندسية</h2>
                <img src="images/pic01_4.jpg" alt="منصة بانوراما لإدارة المشاريع الهندسية">
                <p>تقدم بانوراما القصيم للبرمجة منصة متكاملة لإدارة المكاتب الهندسية الكبيرة تشتمل على الآتي:</p>
                <ul>
                    <li>خط سير كامل للمشاريع الهندسية بكامل تفاصيلها</li>
                    <li>إدارة الموظفين وإجازاتهم ورواتبهم وإقاماتهم</li>
                    <li>نظام إشعارات مخصص لكل بند من البنود أعلاه</li>
                    <li>إدارة السجلات وتراخيص المحلات</li>
                    <li>إدارة الموارد البشرية</li>
                    <li>إدارة متكاملة لسيارات المكتب الهندسي</li>
                </ul>
            </div>

            <div id="work" class="section">
                <h1>عملائنا</h1>
                <h2>مستشفى بريدة المركزي</h2>
                <img src="images/pic02_3.jpg" alt="مستشفى بريدة المركزي">
                <p>صرح طبي عريق بالقصيم منطقة بريده أنجز مستشفى بريدة المركزي أحد مكونات تجمع القصيم الصحي, أكثر من 12 ألف عملية جراحية حتى نهاية الربع الثالث "يناير- سبتمبر" خلال 9 أشهر ، من العام الحالي 2023م ، توزعت على مختلف الأقسام بالمستشفى</p>

                <h2>اركال للاستشارات الهندسية</h2>
                <img src="images/pic02.jpg" alt="اركال للاستشارات الهندسية">
                <p>أركال للإستشارات الهندسيه المتخصص في تصميم المخططات المعماريه بأحدث الأساليب العصريه وتصميم المخططات الإنشائيه تماشيا مع الأكواد العالميه بالإضافة لجميع الأعمال المساحيه والكروكيات التنظيميه وأعمال مكافحة الحريق والأمن والسلامه.</p>

                <h2>نادي الرائد الرياضي</h2>
                <img src="images/pic02_1.jpg" alt="نادي الرائد الرياضي">
                <p>رؤيتنا أن نكون ناديًا رائدًا يعزز النمو المستدام في المجال الرياضي محلياً ودولياً ورسالتنا توفير بيئة رياضية محفّزة في مختلف الألعاب الرياضية، وخلق بيئة جاذبة للاستثمار، و تفعيل المسؤولية الاجتماعية، وتعزيز الإستدامة المهنية والمالية وذلك لتحقيق تطلعات الشركاء والتوجهات المستقبلية للمملكة</p>

                <h2>مخابز وحلويات الأرياف</h2>
                <img src="images/pic02_4.jpg" alt="مخابز وحلويات الأرياف">
                <p>مخابز وحلويات الأرياف.. 40 عاماً من التميز والنجاح 11 فرعاً حول المملكة تقدم أفضل المنتجات
                 بدأت قصة شركة مخابر وحلويات الأرياف عام 1985 ميلادي على يد المؤسس رجل الأعمال فهد المحيميد، من حلم إلى كيان عريق يملك خبرة ممتدة ومحفوفة بالعراقة والأصالة، كانت هذه العلامة التجارية شريكة في الكثير من اللحظات السعيدة للمجتمع مما جعل لهذه العلامة ولاء عاليا من قبل عملائها، حتى أصبحت لا تكتمل الأفراح لسنوات طويلة إلا بصحبة منتجات مخابز وحلويات الأرياف، وكان لدى المؤسس الأستاذ فهد المحيميد بعد نظر في استثماره، حيث حرص على أن لا يخدم قطاعاً واحداً فقط، بل قدم منتجات نوعية في قطاعات متعددة مثل:
                 * الحلويات الشرقية من الكنافة والبقلاوة وغيرها.
                 * الحلويات الغربية من الكيكات الفاخرة، والكثير من الوصفات المبتكرة والمستوحاة من المطبخ الأوروبي وغيرها.
                 * الشوكولاتة الفاخرة بأعلى مستوى وألذ حشوة.
                 * المعجنات والمقليات الطازجة، والمخبوزات التي هي خيار دائم لأصحاب المنازل.</p>

                <h2>النادي العربي</h2>
                <img src="images/pic02_5.jpg" alt="النادي العربي">
                <p>النادي العربي الرياضي بعنيزة, في محافظة عنيزة بمنطقة القصيم وسط المملكة العربية السعودية تأسس سنة 1958, ويحمل النادي شعارا باللون الأحمر والأبيض. يُلقب النادي العربي بفارس عنيزة، وهو نادي رياضي يضم العديد من الألعاب الرياضية أبرزها كرة القدم وكرة اليد وكرة السلة. ويقع مقر النادي في محافظة عنيزة بمنطقة القصيم</p>

                <h2>نادي الصقر</h2>
                <img src="images/pic02_7.jpg" alt="نادي الصقر">
                <p>تاسس نادي الصقر عام 1401هـ على يد مجموعة من اهالي مركز البصر وحينها تم ترشيح الاستاذ عبد العزيز بن عبد الرحمن السويد كاول رئيس للنادي, ثم تعاقب على ادارة النادي احد عشر رئيسا كان اخرهم الرئيس الحالي الاستاذ فهد بن عبد العزيز المحيميد.حقق النادي اول بطولاته على مستوى منطقة القصيم العام 1432هـ وفي العام 1442هـ حقق النادي ذات البطولة للمرة الثانية . وفي نفس العام حقق نادي الصقر تاج بطولاتة : درع المملكة العربية السعودية الاندية الدرجة الثالثة, بقيادة رئيس النادي الاستاذ فهد بن عبدالعزيز المحيميد, وعلى اثرها تأهل لاول مرة في تاريخه لدوري الدرجة الثانية لكرة القدم .</p>

                <h2>نادي السر</h2>
                <img src="images/pic02_8.jpg" alt="نادي السر">
                <p>نسعى بنادي السر الرياضي للتميز الرياضي والإداري عبر عمل مؤسسي لتحقيق أهدافنا وطموحاتنا التي تلبي تطلعات أصحاب المصلحة.
                   وأن نكون متميزين في مختلف المجالات الرياضية ونموذجاً في التطوير المؤسسي
                   التميز روح الفريق الاستدامة الشراكة الشفافية التمكين
                   ولتحقيق التميز المؤسسي تحسين المنافسة الرياضية تعزيز الاستدامة المالية زيادة مشجعي النادي تحسين البنية تفعيل التكامل و الشراكات المجتمعية</p>

                <h2>نادي التقدم</h2>
                <img src="images/pic02_6.jpg" alt="نادي التقدم">
                <p>كانت بدايات النادي بسيطة باجتهادات ألهالي المذنب في عام 1968م، حيث تولى رئاسته إدارته بداح البداح - رحمه هللا تعالى -حتى جاءت الموافقة الكريمة على اعتماد نادي التقدم الرياضي في محافظة المذنب لممارسة كافة أنشطته الرياضية والثقافية واالجتماعية عام 1972 م ويتولى رئاسة مجلس إدارته عثمان بن محمد الدخيل - رحمه الله تعالى - وتتعاقب بعده اإلدارات لوقتنا الحالي.</p>

                <h2>حاضنة الجمعيات</h2>
                <img src="images/pic02_9.jpg" alt="حاضنة الجمعيات">
                <p>حاضنة للجمعيات الأهلية الناشئة هدفها دراسة الاحتياجات بمنطقة القصيم ودعم الافكار ورعايتها ودعم الجمعيات من خلال سبل الاستدامة المالية وتنفيذ افكارها، وحل مشكلة الصعوبات والعوائق التي تواجهها، وكيفية حلها ، ومعرفة الاحتياجات بهدف مساعدتها لتأسيس هذه الجمعية.</p>

                <h2>كليات عنيزة</h2>
                <img src="images/pic02_10.jpg" alt="كليات عنيزة">
                <p>تعد كليات عنيزة من الكليات الناشئة في المملكة؛ إذ انطلقت مسيرتها في العام الجامعي 1437/1436 ه بدعم سخي من حكومة خادم الحرمين الشريفين الملك سلمان بن عبدالعزيز آل سعود، وسمو ولي عهده الأمين، حفظهما الله، ورعاية كريمة من وزارة التعليم، تحقيقا للتوجهات المستقبلية للمملكة في مجال التعليم، والبحث العلمي؛ لتوفير تعليم متميز لأبناء المملكة وبناتها في منطقة القصيم</p>

                <h2>جمعية تجهيز</h2>
                <img src="images/pic02_11.jpg" alt="جمعية تجهيز">
                <p>جمعية خيرية تهتم بشؤون المسلم بعد موته، وتوعية المجتمع بأحكام الجنائز من خلال تقديم عمل خيري متقن للمجتمع من خلال الاهتمام برعاية شؤون الموتى، تجهيزا، وتكفينا، ودفنا، وتدريب وتأهيل المغسلين، وتوعية المجتمع بالمفهوم الشرعي للتعامل مع الجنائز.</p>

                <h2>مكتب المحامي عبدالرحمن الجمعة</h2>
                <img src="images/pic02_12.jpg" alt="مكتب المحامي عبدالرحمن الجمعة">
                <p>مكتب عبدالرحمن محمد الجمعة محامون ومستشارون وموثقون هو مكتب مرخص له بمزاولة المحاماة بموجب ترخيص المحاماة رقم 39389 وتاريخ 1/7/1439 وترخيص التوثيق رقم 1767 /40 وتاريخ 1/9/1440هـ الصادرين من وزارة العدل بالمملكة العربية السعودية</p>

                <h2>مكتب القصيم للزواج</h2>
                <img src="images/pic02_13.jpg" alt="مكتب القصيم للزواج">
                <p>مكتب القصيم للزواج القصيم بريده حي السالميه شرق مسجد الجارالله الجامع المكتب له حوالي 16سنه زوج كثير من الرجال على مستوى المملكه دخولك وتعرفك بالمكتب انت بالطريق الصحيح وانتبه لنفسك من المتطفلين على الزواج في برامج التواصل الذينا ليسو مختصين بالزواج وإنما هدفهم اخذ أموال الناس بالباطل المكتب معروف لدى الجميع ومنهم الجهات المختصه</p>
           </div>


           <div id="contact" class="section">
               <h1>تواصل معنا</h1>
               <h2>اترك لنا رسالتك</h2>
               <form id="contactForm" action="{{ route('contact.store') }}" method="post">
               @csrf
                    <div class="form-group">
                        <label for="name">الاسم</label>
                        <input type="text" id="name" name="name" placeholder="ادخل اسمك" required>
                    </div>

                    <div class="form-group">
                       <label for="email">البريد الالكتروني</label>
                       <input type="email" id="email" name="email" placeholder="ادخل بريدك الالكتروني" required>
                    </div>

                    <div class="form-group">
                        <label for="message">الرسالة</label>
                        <textarea id="message" name="message" placeholder="اكتب رسالتك هنا" rows="4" required></textarea>
                   </div>

                   <div class="form-group">
                        <button type="reset" class="btn-clear">مسح</button>
                        <button type="submit" class="btn-submit">ارسال</button>
                   </div>
              </form>
              <!-- Success Message -->
              <div id="successMessage" style="display:none; color: green;">
                 Message Sent Successfully!
              </div>
              <div id="errorMessage" style="display:none; color: red;">
                 An error occurred.
              </div>

              
           </div>

        </div>
        <!-- END CONTENT -->

    </div>
    
    <footer>
    <div class="footer-content">
         <p class="copyright">&copy; تم التصميم بواسطة<a href=""> بانوراما القصيم للبرمجة والتصميم</a>.</p>2024 - 2014
      <div class="social-icons">
      <a href="https://x.com/Panorama_Q" target="_blank" class="social-icon">
         <i class="fa-brands fa-twitter"></i>
      </a>
      <a href="https://facebook.com/palqassim" target="_blank" class="social-icon">
         <i class="fa-brands fa-facebook"></i>
      </a>
      <a href="https://api.whatsapp.com/send/?phone=9660553172552" target="_blank" class="social-icon">
         <i class="fa-brands fa-whatsapp"></i>
      </a>
      <a href="https://snapchat.com/t/mh05HGb6" target="_blank" class="social-icon">
         <i class="fa-brands fa-snapchat"></i>
      </a>
      <a href="https://tiktok.com/@panorama_alqassim" target="_blank" class="social-icon">
         <i class="fa-brands fa-tiktok"></i>
      </a>
      <a href="https://instagram.com/palqassim/" target="_blank" class="social-icon">
         <i class="fa-brands fa-instagram"></i>
      </a>

        </div>
    </div>
    </footer>

    <!-- Include JavaScript -->
    <script>
        function showSection(sectionId) {
            // Hide all top-level sections
            document.querySelectorAll('#content .section').forEach(section => {
                section.style.display = 'none';
            });

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';
        }

        // Show the "About" section by default
        document.addEventListener('DOMContentLoaded', () => {
            showSection('about');
        });
    </script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            fetch('{{ route('contact.store') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('successMessage').style.display = 'block';
                    document.getElementById('errorMessage').style.display = 'none';
                } else {
                    document.getElementById('errorMessage').style.display = 'block';
                    document.getElementById('successMessage').style.display = 'none';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('errorMessage').style.display = 'block';
                document.getElementById('successMessage').style.display = 'none';
            });
        });
    </script>

</body>
</html>
