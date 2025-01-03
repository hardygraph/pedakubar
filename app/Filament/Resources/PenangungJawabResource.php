<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Pemondokan;
use Filament\Tables\Table;
use App\Models\PenangungJawab;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PenangungJawabResource\Pages;
use App\Filament\Resources\PenangungJawabResource\RelationManagers;

class PenangungJawabResource extends Resource
{
    protected static ?string $model = PenangungJawab::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationGroup = 'Pemondokan';
    protected static ?string $navigationLabel = 'Penanggung Jawab';
    protected static ?string $pluralModelLabel = 'Penanggung Jawab';
    protected ?string $heading = 'Penanggung Jawab';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Penanggung Jawab Pemondokan')
                    ->schema([
                        Forms\Components\Select::make('pemondokan_id')
                            ->label('Nama Pemondokan')
                            ->unique(ignoreRecord: true)
                            ->options(Pemondokan::all()->where('publish', 1)->pluck('title', 'id'))
                            ->required(),
                        Repeater::make('image')
                            ->label('Penanggung Jawab')
                            ->addActionLabel('Tambah Penanggung Jawab')
                            ->maxItems(8)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Nama Penanggung Jawab'),
                                Forms\Components\TextInput::make('jabatan'),
                                Forms\Components\TextInput::make('no_hp')
                                    ->label('Nomor HP')
                                    ->helperText('Nomor wajib awal +62'),
                                Forms\Components\FileUpload::make('panitia')
                                    ->label('Foto Penanggung Jawab')
                                    ->image()
                                    ->reorderable()
                                    ->appendFiles()
                                    ->maxSize(500)
                                    ->directory('tanggungjawab'),
                            ]),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('No')->rowIndex(),

                Tables\Columns\TextColumn::make(name: 'pemondokan.title'),
                Tables\Columns\ToggleColumn::make('publish'),
            ])->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation()
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
            'index' => Pages\ListPenangungJawabs::route('/'),
            'create' => Pages\CreatePenangungJawab::route('/create'),
            'edit' => Pages\EditPenangungJawab::route('/{record}/edit'),
        ];
    }
}
