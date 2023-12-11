<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use App\Models\Adhesion;

class AdhesionForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount()
    {
        $this->form->fill();
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('nom')->label('Nom'),
            Forms\Components\TextInput::make('prenom')->label('Prenom'),
            Forms\Components\TextInput::make('pays')->label('Pays'),
            Forms\Components\TextInput::make('profession')->label('Profession'),
            Forms\Components\TextInput::make('telephone')->label('Telephone')->tel(),
            Forms\Components\TextInput::make('email')->label('Adresse mail')->email(),
            Forms\Components\MarkdownEditor::make('commentaire')->label('Commentaire'),
        ];
    }

    public function submit(): void
    {
        $data = $this->form->getState();
        
        $created = Adhesion::create($data);

        $created->save();

        dd($created);
        
    }

    protected function getFormStatePath(): string
    {
        return 'data';
    }

    public function render(): View
    {
        return view('livewire.adhesion-form');
    }
}