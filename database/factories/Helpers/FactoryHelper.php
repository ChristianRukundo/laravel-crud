<?php

namespace Database\Factories\Helpers;
    /**
     * Define the model's default state.
     *
     * @param string , mixed>
     */
class FactoryHelper {
    public static function createRandomId(string $model){

        $count = $model::query()->count();

        if ($count === 0) {
            $postId = $model::factory()->create()->id;
        } else {
            $postId = rand(1, $count);
        }

        return $postId;
    }
}

?>
