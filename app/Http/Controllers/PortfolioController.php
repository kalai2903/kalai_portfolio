<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = $this->getProjects();
        $skills   = $this->getSkills();

        return view('home', compact('projects', 'skills'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $toEmail = config('portfolio.email') ?: config('mail.from.address');

        if (!$toEmail) {
            return back()->with('success', 'Message received! I\'ll be in touch soon.');
        }

        Mail::raw(
            "Name: {$request->name}\nEmail: {$request->email}\n\n{$request->message}",
            function ($mail) use ($request, $toEmail) {
                $mail->to($toEmail)
                    ->subject($request->subject ?: 'New Contact Form Message')
                    ->replyTo($request->email, $request->name);
            }
        );

        return back()->with('success', 'Message sent! I\'ll get back to you within 24 hours.');
    }

    /* ---------------------------------------------------------------
     * Data helpers — replace with DB queries or a CMS as needed
     * ------------------------------------------------------------- */

    private function getProjects(): array
    {
        return [
            [
                'title'       => 'Priest Booking Platform',
                'description' => 'A real-time priest booking system built around client requirements, currently live and actively maintained. Features booking management, scheduling, and REST API integration.',
                'category'    => 'Full-Stack',
                'year'        => '2025 – Present',       
                'status'      => 'live',                 
                'icon'        => '🛕',
                'tags'        => ['Laravel', 'MySQL', 'REST API', 'Bootstrap', 'JavaScript'],
                'url'         => 'https://archakas.com',
                'case_study'  => '#',
            ],
            [
                'title'       => 'Commercial Web Project',
                'description' => 'End-to-end commercial web application with product listings, user management, and REST API endpoints. Currently live and serving real customers.',
                'category'    => 'Commercial',
                'year'        => '2026 – Present',      
                'status'      => 'live',                 
                'icon'        => '🛒',
                'tags'        => ['Laravel', 'REST API', 'MySQL', 'Deployment'],
                'url'         => 'https://springsugar.in',
                'case_study'  => '#',
            ],
            [
                'title'       => 'Company Website',
                'description' => 'Professional company website with responsive layouts, dynamic content management, and clean UI.',
                'category'    => 'Web Development',
                'year'        => '2025',
                'icon'        => '🏢',
                'tags'        => ['Laravel', 'Bootstrap', 'MySQL', 'CSS'],
                'url'         => 'https://www.teramed.in/index.html',
                'case_study'  => '#',
            ],
            [
                'title'       => 'Academy Management System',
                'description' => 'Full-featured academy platform handling student enrollment, course management, and progress tracking.',
                'category'    => 'Education',
                'year'        => '2025',
                'icon'        => '🎓',
                'tags'        => ['Laravel', 'MySQL', 'JavaScript', 'Bootstrap'],
                'url'         => 'https://www.teramedacademy.in/',
                'case_study'  => '#',
            ],

        ];
    }
    private function getSkills(): array
    {
        return [
            'Backend' => [
                ['name' => 'Laravel / PHP',  'level' => 85],
                ['name' => 'REST APIs',      'level' => 82],
                ['name' => 'MySQL',          'level' => 80],
                ['name' => 'Deployment',     'level' => 70],
            ],
            'Frontend' => [
                ['name' => 'HTML & CSS',     'level' => 90],
                ['name' => 'Bootstrap',      'level' => 88],
                ['name' => 'JavaScript',     'level' => 75],
                ['name' => 'Responsive UI',  'level' => 85],
            ],
            'Tools & Workflow' => [
                ['name' => 'Git & GitHub',   'level' => 78],
                ['name' => 'Postman',        'level' => 80],
                ['name' => 'XAMPP / Local',  'level' => 85],
                ['name' => 'VS Code',        'level' => 90],
            ],
        ];
    }
}
