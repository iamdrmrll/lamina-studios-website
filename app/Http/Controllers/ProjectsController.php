<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Projects::all();
        return view('admin-side.projects', compact('projects'));
    }

    public function store(Request $request)
    {
        $projects = new Projects;
        // main page
        if($request->hasFile('main_page_bg')) {
            $file = $request->file('main_page_bg');
            $filename = $request->input('project_name') . '_' .  'main_page_bg' . '.' . $file->getClientOriginalExtension();
            $file->move('img/projects/bg/00_main_page_bg/', $filename);
            $projects->main_page_bg = $filename;
        }
        $projects->project_name = $request->input('project_name');
        $projects->read_more_link = $request->input('read_more_link');
        $projects->present_link = $request->input('present_link');
        $projects->gamepedia_link = $request->input('gamepedia_link');
        $projects->merchstore_link = $request->input('merchstore_link');

        // first page
        if($request->hasFile('first_page_bg')) {
            $file = $request->file('first_page_bg');
            $filename = $request->input('project_name') . '_' .  'first_page_bg' . '.' . $file->getClientOriginalExtension();
            $file->move('img/projects/bg/01_first_page_bg/', $filename);
            $projects->first_page_bg = $filename;
        }
        $projects->trailer_link = $request->input('trailer_link');
        $projects->description = $request->input('description');

        // second page
        if($request->hasFile('second_page_bg')) {
            $file = $request->file('second_page_bg');
            $filename = $request->input('project_name') . '_' .  'second_page_bg' . '.' . $file->getClientOriginalExtension();
            $file->move('img/projects/bg/02_second_page_bg/', $filename);
            $projects->second_page_bg = $filename;
        }

        // third page
        if($request->hasFile('third_page_bg')) {
            $file = $request->file('third_page_bg');
            $filename = $request->input('project_name') . '_' .  'third_page_bg' . '.' . $file->getClientOriginalExtension();
            $file->move('img/projects/bg/03_third_page_bg/', $filename);
            $projects->third_page_bg = $filename;
        }
        $projects->modding_editor_link = $request->input('modding_editor_link');
        $projects->documentation_link = $request->input('documentation_link');

        // fourth page
        if($request->hasFile('fourth_page_bg')) {
            $file = $request->file('fourth_page_bg');
            $filename = $request->input('project_name') . '_' .  'fourth_page_bg' . '.' . $file->getClientOriginalExtension();
            $file->move('img/projects/bg/04_fourth_page_bg/', $filename);
            $projects->fourth_page_bg = $filename;
        }

        $projects->save();
        return redirect('/admin/projects/#')->with('status', 'project added successfully');
    }

    public function update(Request $request, $id)
    {
        $project = Projects::find($id);
        // main page
        if($request->hasFile('main_page_bg')) {
            $main_page_bg_destination = 'img/projects/bg/00_main_page_bg/' . $project->main_page_bg;
            if (File::exists($main_page_bg_destination)) {
                File::delete($main_page_bg_destination);
            }
            $file = $request->file('main_page_bg');
            $filename = $request->input('project_name') . '_' .  'main_page_bg' . '.' . $file->getClientOriginalExtension();
            $file->move('img/projects/bg/00_main_page_bg/', $filename);
            $project->main_page_bg = $filename;
        }
        $project->project_name = $request->input('project_name');
        if ($request->has('project_name')) {
            $new_main_page_bg = $request->input('project_name') . '_' . 'main_page_bg' . '.' . substr($project->main_page_bg, -3, 3);
            $new_first_page_bg = $request->input('project_name') . '_' . 'first_page_bg' . '.' . substr($project->first_page_bg, -3, 3);
            $new_second_page_bg = $request->input('project_name') . '_' . 'second_page_bg' . '.' . substr($project->second_page_bg, -3, 3);
            $new_third_page_bg = $request->input('project_name') . '_' . 'third_page_bg' . '.' . substr($project->third_page_bg, -3, 3);
            $new_fourth_page_bg = $request->input('project_name') . '_' . 'fourth_page_bg' . '.' . substr($project->fourth_page_bg, -3, 3);

            $main_page_bg_destination = 'img/projects/bg/00_main_page_bg/' . $project->main_page_bg;
            $new_main_page_bg_destination = 'img/projects/bg/00_main_page_bg/' . $new_main_page_bg;
            rename($main_page_bg_destination, $new_main_page_bg_destination);
            $first_page_bg_destination = 'img/projects/bg/01_first_page_bg/' . $project->first_page_bg;
            $new_first_page_bg_destination = 'img/projects/bg/01_first_page_bg/' . $new_first_page_bg;
            rename($first_page_bg_destination, $new_first_page_bg_destination);
            $second_page_bg_destination = 'img/projects/bg/02_second_page_bg/' . $project->second_page_bg;
            $new_second_page_bg_destination = 'img/projects/bg/02_second_page_bg/' . $new_second_page_bg;
            rename($second_page_bg_destination, $new_second_page_bg_destination);
            $third_page_bg_destination = 'img/projects/bg/03_third_page_bg/' . $project->third_page_bg;
            $new_third_page_bg_destination = 'img/projects/bg/03_third_page_bg/' . $new_third_page_bg;
            rename($third_page_bg_destination, $new_third_page_bg_destination);
            $fourth_page_bg_destination = 'img/projects/bg/04_fourth_page_bg/' . $project->fourth_page_bg;
            $new_fourth_page_bg_destination = 'img/projects/bg/04_fourth_page_bg/' . $new_fourth_page_bg;
            rename($fourth_page_bg_destination, $new_fourth_page_bg_destination);

            $project->main_page_bg =  $new_main_page_bg;
            $project->first_page_bg =  $new_first_page_bg;
            $project->second_page_bg = $new_second_page_bg;
            $project->third_page_bg = $new_third_page_bg;
            $project->fourth_page_bg = $new_fourth_page_bg;
        }
        $project->read_more_link = $request->input('read_more_link');
        $project->present_link = $request->input('present_link');
        $project->gamepedia_link = $request->input('gamepedia_link');
        $project->merchstore_link = $request->input('merchstore_link');

        // first page
        if($request->hasFile('first_page_bg')) {
            $first_page_bg_destination = 'img/projects/bg/01_first_page_bg/' . $project->first_page_bg;
            if (File::exists($first_page_bg_destination)) {
                File::delete($first_page_bg_destination);
            }
            $file = $request->file('first_page_bg');
            $filename = $request->input('project_name') . '_' .  'first_page_bg' . '.' . $file->getClientOriginalExtension();
            $file->move('img/projects/bg/01_first_page_bg/', $filename);
            $project->first_page_bg = $filename;
        }
        $project->trailer_link = $request->input('trailer_link');
        $project->description = $request->input('description');

        // second page
        if($request->hasFile('second_page_bg')) {
            $second_page_bg_destination = 'img/projects/bg/02_second_page_bg/' . $project->second_page_bg;
            if (File::exists($second_page_bg_destination)) {
                File::delete($second_page_bg_destination);
            }
            $file = $request->file('second_page_bg');
            $filename = $request->input('project_name') . '_' .  'second_page_bg' . '.' . $file->getClientOriginalExtension();
            $file->move('img/projects/bg/02_second_page_bg/', $filename);
            $project->second_page_bg = $filename;
        }

        // third page
        if($request->hasFile('third_page_bg')) {
            $third_page_bg_destination = 'img/projects/bg/03_third_page_bg/' . $project->third_page_bg;
            if (File::exists($third_page_bg_destination)) {
                File::delete($third_page_bg_destination);
            }
            $file = $request->file('third_page_bg');
            $filename = $request->input('project_name') . '_' .  'third_page_bg' . '.' . $file->getClientOriginalExtension();
            $file->move('img/projects/bg/03_third_page_bg/', $filename);
            $project->third_page_bg = $filename;
        }
        $project->modding_editor_link = $request->input('modding_editor_link');
        $project->documentation_link = $request->input('documentation_link');

        // fourth page
        if($request->hasFile('fourth_page_bg')) {
            $fourth_page_bg_destination = 'img/projects/bg/04_fourth_page_bg/' . $project->fourth_page_bg;
            if (File::exists($fourth_page_bg_destination)) {
                File::delete($fourth_page_bg_destination);
            }
            $file = $request->file('fourth_page_bg');
            $filename = $request->input('project_name') . '_' .  'fourth_page_bg' . '.' . $file->getClientOriginalExtension();
            $file->move('img/projects/bg/04_fourth_page_bg/', $filename);
            $project->fourth_page_bg = $filename;
        }

        $project->save();
        return redirect('/admin/projects/#')->with('status', 'Project Updated Successfully');
    }

    public function destroy($id)
    {
        $project = Projects::find($id);
        $main_page_bg_destination = 'img/projects/bg/00_main_page_bg/' . $project->main_page_bg;
        $first_page_bg_destination = 'img/projects/bg/01_first_page_bg/' . $project->first_page_bg;
        $second_page_bg_destination = 'img/projects/bg/02_second_page_bg/' . $project->second_page_bg;
        $third_page_bg_destination = 'img/projects/bg/03_third_page_bg/' . $project->third_page_bg;
        $fourth_page_bg_destination = 'img/projects/bg/04_fourth_page_bg/' . $project->fourth_page_bg;
        if (File::exists($main_page_bg_destination)) {
            File::delete($main_page_bg_destination);
            File::delete($first_page_bg_destination);
            File::delete($second_page_bg_destination);
            File::delete($third_page_bg_destination);
            File::delete($fourth_page_bg_destination);
        }
        $project->delete();
        return redirect('/admin/projects/#')->with('status', 'Project Deleted Successfully');
    }
}
