<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Halaman;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\HalamanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HalamanResource\RelationManagers;

class HalamanResource extends Resource
{
    protected static ?string $model = Halaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Beranda';

    protected static ?string $navigationLabel = 'Halaman';
    protected static ?string $pluralModelLabel = 'Halaman';
    protected ?string $heading = 'Halaman';
    protected static ?int $navigationSort = 3;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required(),
                                TinyEditor::make('body')
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsVisibility('public')
                                    ->fileAttachmentsDirectory('halaman')
                                    ->profile('simpel')
                                    ->ltr()
                                    ->columnSpan('full'),

                            ]),
                    ])
                    ->columnSpan(['lg' => 2]),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->directory('halaman')
                                    ->helperText('Tidak Boleh Lebih dari 500kb')
                                    ->imageResizeMode('cover')
                                    ->imageResizeTargetWidth('800')
                                    ->maxSize(500),



                                Forms\Components\Toggle::make('publish')
                                    ->default(true)
                                    ->inline(),


                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),


            ])->columns(3);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('No')->rowIndex(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('publish'),


            ])->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation()
                    ->before(function (Model $record) {
                        if ($record->image == null) {
                            return;
                        } else {

                            Storage::disk('public')->delete($record->image);
                        }
                    })
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListHalamen::route('/'),
            // 'create' => Pages\CreateHalaman::route('/create'),
            // 'edit' => Pages\EditHalaman::route('/{record}/edit'),
        ];
    }
}
