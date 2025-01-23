<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $terms = [
            [
                'title' => 'شروط الخدمة',
                'desc' => 'تحرص Sportat على تصميم تقنيات وخدمات تساعد الأشخاص على التواصل مع بعضهم البعض، وبناء المجتمعات الرياضية، وتعزيز نمو الأنشطة الرياضية. تحكم هذه الشروط استخدامك لموقع Sportat والمنتجات والميزات والتطبيقات والخدمات والتقنيات والبرامج الأخرى التي نوفرها (منتجات Sportat أو المنتجات)، ما لم نوضح صراحةً أنه يتم تطبيق شروط أخرى مستقلة (خلاف هذه الشروط). يتم توفير هذه المنتجات لك بواسطة شركة Sportat Platforms, Inc.‎

                    لا نُحصِل أي رسوم منك مقابل استخدام موقع Sportat أو المنتجات والخدمات الأخرى التي تغطيها هذه الشروط، ما لم نذكر خلاف ذلك. وبدلاً من ذلك، تدفع لنا الأنشطة الرياضية والمؤسسات، وغيرها من الأشخاص رسومًا نظير عرض إعلانات منتجاتها وخدماتها عليك. باستخدامك لمنتجاتنا، فإنك توافق على أنه يمكننا أن نعرض عليك إعلانات نرى أنها قد تكون ملاءمة لك ولاهتماماتك الرياضية. نحن نستخدم بياناتك الشخصية لمساعدتنا في تحديد الإعلانات ذات الطابع الشخصي التي نعرضها عليك.

                    لا نبيع بياناتك الشخصية للمعلنين، ولا نشارك المعلومات التي تحدد هويتك مباشرةً (مثل اسمك أو عنوان بريدك الإلكتروني أو معلومات الاتصال الأخرى) مع المعلنين ما لم تمنحنا إذنًا محددًا بذلك. بدلاً من ذلك، يمكن للمعلنين إخبارنا بأشياء مثل نوع الجمهور الذي يرغبون في عرض إعلاناتهم عليه، ونقوم نحن بعرض هذه الإعلانات على أشخاص قد يكونون مهتمين. نوفر للمعلنين تقارير حول أداء إعلاناتهم لمساعدتهم على فهم كيفية تفاعل الأشخاص مع المحتوى الذي ينشرونه. راجع القسم 2 أدناه للتعرف على المزيد عن آلية عمل الإعلانات ذات الطابع الشخصي بموجب هذه الشروط على منتجات Sportat.

                    توضح سياسة الخصوصية التي نتبعها كيفية قيامنا بجمع بياناتك الشخصية واستخدامها لتحديد بعض الإعلانات التي تراها وتوفير جميع الخدمات الأخرى الموضحة أدناه. يمكنك أيضًا الانتقال إلى صفحات الإعدادات في منتج Sportat المناسب في أي وقت لمراجعة اختيارات الخصوصية المتاحة لك فيما يتعلق بكيفية استخدامنا لبياناتك',
                'type' => 'privacy',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'الخدمات التي نوفرها',
                'desc' => 'تختلف تجربتك على Sportat عن تجربة أي شخص آخر: بدءًا من المنشورات والقصص والمناسبات الرياضية والإعلانات وغيرها من أنواع المحتوى الأخرى التي تظهر لك في آخر أخبار Sportat أو منصة الفيديو التي نوفرها، إلى صفحات Sportat التي تتابعها والميزات الأخرى التي قد تستخدمها، مثل Sportat Marketplace والبحث. على سبيل المثال، نستخدم البيانات المتوفرة لدينا، مثل تلك المتعلقة بعمليات التواصل التي تقوم بها والاختيارات والإعدادات التي تحددها والعناصر التي تقوم بمشاركتها والإجراءات التي تتخذها داخل منتجاتنا وخارجها - لإضفاء طابع شخصي على تجربتك.',
                'type' => 'terms',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('terms')->insert($terms);
    }
}