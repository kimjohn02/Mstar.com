<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Digital Printing',
                'slug' => 'digital-printing',
                'description' => 'High-quality digital printing services for all your printing needs. We offer vibrant colors, sharp details, and quick turnaround times.',
                'benefits' => 'Fast production, high-quality output, cost-effective for small to medium orders',
                'applications' => 'Flyers, brochures, posters, greeting cards, and more',
                'icon' => 'fa-print',
                'is_active' => true,
                'display_order' => 1,
            ],
            [
                'name' => 'Offset Printing',
                'slug' => 'offset-printing',
                'description' => 'Professional offset printing for large volume orders. Perfect for books, magazines, and high-volume packaging.',
                'benefits' => 'Cost-effective for large orders, excellent color consistency, professional quality',
                'applications' => 'Books, magazines, catalogs, packaging materials',
                'icon' => 'fa-layer-group',
                'is_active' => true,
                'display_order' => 2,
            ],
            [
                'name' => 'Tarpaulin Printing',
                'slug' => 'tarpaulin-printing',
                'description' => 'Durable tarpaulin printing for outdoor advertising and events. Weather-resistant and long-lasting.',
                'benefits' => 'Weather-resistant, durable, eye-catching colors, portable',
                'applications' => 'Banners, event signage, outdoor advertisements',
                'icon' => 'fa-flag',
                'is_active' => true,
                'display_order' => 3,
            ],
            [
                'name' => 'Business Cards',
                'slug' => 'business-cards',
                'description' => 'Professional business card printing with premium finishes. Make a lasting impression with high-quality cards.',
                'benefits' => 'Premium finishes, professional appearance, affordable prices',
                'applications' => 'Corporate events, networking, business meetings',
                'icon' => 'fa-id-card',
                'is_active' => true,
                'display_order' => 4,
            ],
            [
                'name' => 'Flyers',
                'slug' => 'flyers',
                'description' => 'Eye-catching flyers for your promotions and events. Customizable sizes and finishes.',
                'benefits' => 'Quick turnaround, affordable, effective marketing tool',
                'applications' => 'Promotions, events, advertisements, sales',
                'icon' => 'fa-paper-plane',
                'is_active' => true,
                'display_order' => 5,
            ],
            [
                'name' => 'Brochures',
                'slug' => 'brochures',
                'description' => 'Professional brochures for your business. Available in various formats and finishes.',
                'benefits' => 'Professional appearance, effective communication, multiple format options',
                'applications' => 'Marketing materials, product information, company profiles',
                'icon' => 'fa-book',
                'is_active' => true,
                'display_order' => 6,
            ],
            [
                'name' => 'Posters',
                'slug' => 'posters',
                'description' => 'Large format posters for maximum impact. Perfect for events, promotions, and advertisements.',
                'benefits' => 'High visibility, affordable, customizable sizes',
                'applications' => 'Events, advertisements, announcements, promotions',
                'icon' => 'fa-image',
                'is_active' => true,
                'display_order' => 7,
            ],
            [
                'name' => 'Invitations',
                'slug' => 'invitations',
                'description' => 'Elegant invitations for weddings, events, and special occasions.',
                'benefits' => 'Professional design, premium finishes, customizable styles',
                'applications' => 'Weddings, parties, corporate events, celebrations',
                'icon' => 'fa-envelope',
                'is_active' => true,
                'display_order' => 8,
            ],
            [
                'name' => 'Stickers',
                'slug' => 'stickers',
                'description' => 'Custom stickers for branding, promotions, and decoration. Waterproof and durable.',
                'benefits' => 'Affordable, waterproof, customizable shapes and sizes',
                'applications' => 'Branding, promotions, product labels, decoration',
                'icon' => 'fa-smile',
                'is_active' => true,
                'display_order' => 9,
            ],
            [
                'name' => 'Certificates',
                'slug' => 'certificates',
                'description' => 'Professional certificates for awards, achievements, and recognition.',
                'benefits' => 'Professional appearance, premium finishes, customizable designs',
                'applications' => 'Awards, academic certificates, corporate recognition',
                'icon' => 'fa-award',
                'is_active' => true,
                'display_order' => 10,
            ],
            [
                'name' => 'Book Binding',
                'slug' => 'book-binding',
                'description' => 'Professional book binding services for your publications and documents.',
                'benefits' => 'Durable, professional appearance, various binding options',
                'applications' => 'Books, manuals, thesis binding, document binding',
                'icon' => 'fa-book-open',
                'is_active' => true,
                'display_order' => 11,
            ],
            [
                'name' => 'Laminating',
                'slug' => 'laminating',
                'description' => 'Protective laminating service to preserve and protect your documents.',
                'benefits' => 'Durability, water-resistant, protects from wear and tear',
                'applications' => 'Document protection, ID cards, photos, certificates',
                'icon' => 'fa-shield-alt',
                'is_active' => true,
                'display_order' => 12,
            ],
            [
                'name' => 'Customized Printing',
                'slug' => 'customized-printing',
                'description' => 'Custom printing solutions tailored to your specific requirements and needs.',
                'benefits' => 'Flexible design, personalized solutions, unlimited possibilities',
                'applications' => 'Custom products, promotional items, special projects',
                'icon' => 'fa-palette',
                'is_active' => true,
                'display_order' => 13,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
