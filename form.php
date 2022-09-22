<?php

// Load Form Style
add_action('wp_enqueue_scripts', 'load_assets');

// Add stylesheet function
function load_assets(){
    wp_enqueue_style(
        'contact-form-style',
        plugin_dir_url( __FILE__ ) . './css/contact-form-style.css',
        array(),
        1,
        'all'
    );
}

// Load task form function
function load_task_form(){
    return ('
    <form class="task-form">
        <h3 class="task-form-title">Create New Task</h3>
        <div class="form-body">
            <div class="form-group">
                <label class="input-label" for="task-title">Title</label>
                <input type="text" name="task-title" placeholder="Enter Task Title" required />
            </div>
            
            <div class="form-group">
                <label class="input-label" for="task-description">Description</label>
                <input class="task-description" name="task-description" placeholder="Enter Task Description" required />
            </div>
        </div>
        <button type="submit" class="task-form-btn">Create Task</button>
    </form>
    ');
}