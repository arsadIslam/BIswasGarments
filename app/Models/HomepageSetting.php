<?php

namespace App\Models;

use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Model;

class HomepageSetting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'key',
        'value',
    ];

    /**
     * Default homepage content shown before admins customize it.
     *
     * @return array<string, string>
     */
    public static function defaults(): array
    {
        return [
            'promo_label' => 'New drop live',
            'promo_text' => 'Extra 10% off on prepaid fashion orders',
            'hero_eyebrow' => 'Fresh fashion edit',
            'hero_title' => 'New styles for every wardrobe.',
            'hero_description' => 'A sharper ecommerce homepage for Biswas Garments with clean product discovery, fast shopping actions, and a premium fashion-store layout.',
            'hero_primary_button' => 'Shop New Arrivals',
            'hero_secondary_button' => 'Explore Collections',
            'sale_card_eyebrow' => 'Limited sale',
            'sale_card_title' => 'Flat 40% off festive picks',
            'sale_card_description' => 'Sarees, kurtis, shirts, denim, and kids sets for the season.',
            'trend_card_eyebrow' => 'Trending now',
            'trend_card_title' => 'Minimal shirts and summer dresses',
            'trend_card_description' => 'Curated bestseller cards ready for your product catalog.',
            'categories_title' => 'Explore categories',
            'categories_description' => 'Quick category links inspired by modern fashion stores, built for fast browsing.',
            'lookbook_title' => 'Season lookbook',
            'lookbook_description' => 'Large visual tiles help the homepage feel more like a real fashion ecommerce storefront.',
            'products_title' => 'Trending products',
            'products_description' => 'Precise ecommerce cards with wishlist, rating, price, quick view, and add-to-cart actions.',
            'sale_band_eyebrow' => 'Sale preview',
            'sale_band_title' => 'Build campaigns for new drops, offers, and festive edits.',
            'sale_band_description' => 'This section can later connect to real sale collections from your Laravel product database.',
            'newsletter_title' => 'Never miss a drop.',
            'newsletter_description' => 'Capture customer emails for product launches, restock alerts, and seasonal ecommerce campaigns.',
        ];
    }

    /**
     * Get saved settings merged over defaults.
     *
     * @return array<string, string>
     */
    public static function homepageContent(): array
    {
        try {
            $settings = self::query()->pluck('value', 'key')->all();
        } catch (QueryException) {
            $settings = [];
        }

        return array_replace(self::defaults(), $settings);
    }
}
