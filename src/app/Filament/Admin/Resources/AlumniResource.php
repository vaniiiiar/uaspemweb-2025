<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlumniResource\Pages;
use App\Models\Alumni;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;

class AlumniResource extends Resource
{
    protected static ?string $model = Alumni::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Data Alumni';
    protected static ?string $pluralLabel = 'Alumni';
    protected static ?string $slug = 'alumni';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')->required(),
            Forms\Components\TextInput::make('tahun_lulus')->numeric()->required(),
            Forms\Components\TextInput::make('jurusan')->required(),
            Forms\Components\TextInput::make('pekerjaan'),
            Forms\Components\TextInput::make('kontak'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nama')->searchable(),
            Tables\Columns\TextColumn::make('tahun_lulus')->sortable(),
            Tables\Columns\TextColumn::make('jurusan'),
            Tables\Columns\TextColumn::make('pekerjaan'),
            Tables\Columns\TextColumn::make('kontak'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlumni::route('/'),
            'create' => Pages\CreateAlumni::route('/create'),
            'edit' => Pages\EditAlumni::route('/{record}/edit'),
        ];
    }
}
