SELECT distinct(cat_id), cat_descr
        						FROM blog_categories, blog_users, blog_posts
        						WHERE post_category=cat_id
        						AND post_author=ID
        						AND ID=:user_id