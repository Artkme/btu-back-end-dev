<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->create("https://www.youtube.com/watch?v=OscqgBj1HCw&t=554s", "RADIO REWIND! 2010 Abu Dhabi Grand Prix",
        "A nail biting title decider at the 2010 Abu Dhabi Grand Prix, but as you've never heard it before!");
        $this->create("https://www.youtube.com/watch?v=Cc-WLp6EGVU", "Sebastian Vettel 2011 - Unstoppable",
         "Tribute to Sebastian Vettel's 2011 season.");
        $this->create("https://www.youtube.com/watch?v=98h_qLwMJHg", "Sebastian Vettel's Championship Charge | 2012 Brazilian Grand Prix",
         "Championship charges don't get much more dramatic than this. From the front, to the back, to an unforgettable third world title - here's how Seb got it done back in 2012.");
        $this->create("https://www.youtube.com/watch?v=nYUITaZihZU&t=4s", "Sebastian Vettel - World Champion 2013",
         "Formula 1");
        $this->create("https://www.youtube.com/watch?v=s5VCm-YxrKQ", "New 2022 F1 Opening Titles!", "New era. New cars. New drivers. New opening titles!");
    }

    public function create(string $video_url, string $video_tite, string $description) {
        Video::create([
            "video_url" => $video_url,
            "video_title" => $video_tite,
            "description" => $description
        ]);
    }
}
