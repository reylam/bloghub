<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Category;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::create([
            'username' => 'Aldo',
            'email' => 'aldo@email.com',
            'password' => 'aldopassword'
        ]);

        $admin = User::create([
            'username' => 'Admin',
            'email' => 'admin@email.com',
            'password' => 'adminpassword'
        ]);

        $role_user = Role::create([
            'name' =>   'user'
        ]);

        $role_admin = Role::create([
            'name' =>   'admin'
        ]);

        RoleUser::create([
            'user_id' => $user->id,
            'role_id' => $role_user->id
        ]);

        RoleUser::create([
            'user_id' => $admin->id,
            'role_id' => $role_admin->id
        ]);

        $tech = Category::create([
            'name' => 'Technology',
            'slug' => 'technlogy'
        ]);

        $finance = Category::create([
            'name' => 'Finance',
            'slug' => 'finance'
        ]);

        $sport = Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);

        $ai = Category::create([
            'name' => 'AI',
            'slug' => 'ai'
        ]);

        $programming = Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        $design = Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        $manufacturing = Category::create([
            'name' => 'Manufacturing',
            'slug' => 'manufacturing'
        ]);

        $politics = Category::create([
            'name' => 'Politics',
            'slug' => 'politics'
        ]);

        $tag_tech = Tag::create([
            'name' => 'Iphone16'
        ]);

        $tag_finance = Tag::create([
            'name' => 'KeuanganIndonesia2024'
        ]);

        $tag_sport = Tag::create([
            'name' => 'RonaldoKejedotBola'
        ]);

        $tag_ai = Tag::create([
            'name' => 'CeoChatGPTDipecat'
        ]);

        $tag_proggraming = Tag::create([
            'name' => 'PythonBestLangguage'
        ]);

        $tag_design = Tag::create([
            'name' => 'MiuiGantiLogo'
        ]);

        $tag_manufacturing = Tag::create([
            'name' => 'AutomationSecuring2025'
        ]);

        $tag_politics = Tag::create([
            'name' => 'RUUPerampasanAset'
        ]);

        $blog_tech = Blog::create([
            'title' => 'Apple Resmi Merilis iPhone 16 dengan Inovasi Terbaru',
            'slug' => Str::uuid()->toString(),
            'content' => 'Apple kembali membuat gebrakan dengan meluncurkan iPhone 16, penerus dari seri sebelumnya yang membawa berbagai pembaruan signifikan. iPhone 16 hadir dengan desain yang lebih ramping, performa yang lebih kuat, serta peningkatan di sektor kamera dan daya tahan baterai.

Fitur Unggulan iPhone 16:

1. Chip A18 Bionic – Dilengkapi dengan chip terbaru dari Apple, iPhone 16 menjanjikan performa lebih cepat dan efisiensi daya yang lebih baik.
2. Layar ProMotion 120Hz – Visual semakin halus dengan refresh rate 120Hz yang memberikan pengalaman scrolling dan gaming lebih responsif.
3. Kamera 48MP – Kamera utama iPhone 16 menghadirkan resolusi yang lebih tinggi dengan dukungan teknologi pencitraan yang ditingkatkan, memungkinkan hasil foto lebih tajam dan jernih.
4. Peningkatan Daya Baterai – Dengan optimasi chip A18, iPhone 16 menawarkan daya tahan baterai yang lebih lama dibandingkan seri sebelumnya.
5. Desain Sleek dan Kokoh – Mengusung desain kaca matte yang lebih ramping dan kuat, iPhone 16 tetap mempertahankan estetika premium.
6. Dengan iPhone 16, Apple terus memperkuat posisinya sebagai pemimpin di pasar smartphone global, menawarkan inovasi yang selalu ditunggu-tunggu oleh penggemarnya di seluruh dunia.',
            'category_id' => $tech->id,
        ]);
    }
}
