<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RuanganResource\Pages;
use App\Filament\Resources\RuanganResource\RelationManagers;
use App\Models\Ruangan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RuanganResource extends Resource
{
    protected static ?string $model = Ruangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('nama_ruangan')
                ->required()
                ->maxLength(100),
            Forms\Components\TextInput::make('kapasitas')
                ->numeric()
                ->default(0),
            Forms\Components\Select::make('tipe_ruangan')
                ->options([
                    'ruang_kelas' => 'Ruang Kelas',
                    'lab' => 'Lab',
                    'ruang_diskusi' => 'Ruang Diskusi',
                ])
                ->required(),
            Forms\Components\Toggle::make('tersedia')
                ->default(true),
            Forms\Components\TextInput::make('fasilitas'),
            Forms\Components\FileUpload::make('gambar')->image(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_ruangan'),
                Tables\Columns\TextColumn::make('kapasitas'),
                Tables\Columns\TextColumn::make('tipe_ruangan'),
                Tables\Columns\IconColumn::make('tersedia')->boolean(),
                Tables\Columns\TextColumn::make('fasilitas'),
                Tables\Columns\ImageColumn::make('gambar'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRuangans::route('/'),
            'create' => Pages\CreateRuangan::route('/create'),
            'edit' => Pages\EditRuangan::route('/{record}/edit'),
        ];
    }
}
